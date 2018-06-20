<?php

/**
* Every user related (static class)
*/
class User extends Model{

	private static $email;
	private static $password_hash;
	protected static $tablename = "users";

	/**
	* Preparing values to be sent to database
	* @param string $email
	* @param string $password
	* @param string $password_confirmation
	*/
	public static function new($email, $password, $password_confirmation) {
		Validator::not_empty(array($email, $password, $password_confirmation));
		self::$email = Validator::valid_email($email) && Validator::unique_email($email, self::$tablename) ? $email : false;
		self::$password_hash = Validator::matching($password, $password_confirmation, array("Password"=>"The passwords do not match.")) ? password_hash($password, PASSWORD_BCRYPT) : false;
	}

	/**
	* Creates new user if free from errors
	*/
	public static function create() {
		if (empty(Validator::$errors)) {
			self::insert(self::$tablename, array("email"=>self::$email, "password_hash"=>self::$password_hash));
			Session::setFlash("alert-success","You have successfully signed up!");
		} else {
			Session::setFlash("alert-danger", self::display(Validator::$errors));
			Validator::$errors = [];
		}
	}

	/**
	* Logs in the user if correct credentials
	* @param string $email
	* @param string $password
	* @param bool $remember
	*/
	public static function login($email, $password, $remember=false) {
		if(Validator::not_empty(array($email, $password))) {
			$user = self::find_where(self::$tablename, array("email"=>$email));
			if (password_verify($password, $user[0]["password_hash"]) && !empty($user)) {
				if($remember) {
					self::remember_me($user);
				}
				Session::write("user", $user);
				Session::setFlash("alert-success","Successful connection.");
				header('Location: index.php');
			} else {
				Session::setFlash("alert-danger","Incorrect email or password.<br>");
			}
		} else {
			Session::setFlash("alert-danger", self::display(Validator::$errors));
		}
	}

	/**
	* Logs out user if logged in
	*/
	public static function logout() {
		if (self::logged_in()) {
			Session::delete('user');
			setcookie("remember", null, -1);
			Session::setFlash("alert-success", "Logged out successfully.");
			header("Location: index.php");
		} else {
			Session::setFlash("alert-danger", "Already logged out.");
			header("Location: index.php");
		}
	}

	/**
	* Sends email with link to reset password
	* @param string $email
	*/
	public static function retrieve_password($email) {
		if(Validator::not_empty(array($email))) {
			$user = self::find_where(self::$tablename, array("email"=>$email));
			if ($user) {
				$reset_token = self::str_random(250);
				self::update(self::$tablename, array("reset_token"=>$reset_token), array("id"=>$user[0]["id"]));
				mail($email, "Reset your password", "Please reset your password by entering this link: ".ROOT."reset_password.php?id={$user[0]['id']}&token=$reset_token");
				Session::setFlash("alert-success", "An email has been sent to your account with the link to reset your password.");
				header('Location: index.php');
				exit();
			} else {
				Session::setFlash('alert-danger', "This email isn't linked to any account in this website.");
			}
		} else {
			Session::setFlash('alert-danger', self::display(Validator::$errors));
		}
	}

	/**
	* Retrieves user
	* @param integer $id
	* @param string $reset_token
	*/
	public static function retrieve_user($id, $reset_token) {
		$user = self::find_where(self::$tablename, array("id"=>$id));
		if (!(!empty($user) || $user[0]["reset_token"] == $reset_token)) {
			Session::setFlash("alert-danger", "Token may have expired.");
			header("Location: index.php");
			exit();
		} else {
			return $user;
		}
	}

	/**
	* Resets password
	* @param string $password
	* @param string $password_confirmation
	* @param array $user
	*/
	public static function reset_password($password, $password_confirmation, $user) {
		if(Validator::not_empty(array($password, $password_confirmation)) && Validator::matching($password, $password_confirmation, array("Password"=>"The passwords do not match."))) {
			$password_hash = password_hash($password, PASSWORD_BCRYPT);
			self::update(self::$tablename, array("password_hash"=>$password_hash), array("id"=>$user[0]['id']));
			self::update(self::$tablename, array("reset_token"=>NULL), array("id"=>$user[0]['id']));
			Session::setFlash("alert-success", "Password has been reset!");
			Session::write("user", $user);
			header("Location: index.php");
			exit();
		} else {
			Session::setFlash("alert-danger", self::display(Validator::$errors));
		}
	}

	/**
	* Reconnects user if remember me was checked
	*/
	public static function remember_from_cookies() {
		if (isset($_COOKIE['remember']) && !(self::logged_in())) {
			$user_id = explode("==", $_COOKIE['remember'])[0];
			$user = User::find_where("users", array("id" => $user_id));
			$expected = $user_id."==".$user[0]["remember_token"];
			if ($user_id && $user && $expected == $_COOKIE['remember']) {
				Session::write("user", $user);
				$remember_token = $user[0]["remember_token"];
				setcookie("remember", $user[0]["id"]. "==". $remember_token, time()+60*60*24*7);
			} else {
				setcookie("remember", null, -1);
			}
		}
	}

	/**
	* Changes email
	* @param string $email
	* @param string $email_confirmation
	* @param integer $user_id
	*/
	public static function change_email($email, $email_confirmation, $user_id) {
		if (Validator::not_empty(array($email, $email_confirmation)) && Validator::valid_email($email) && Validator::matching($email, $email_confirmation, array("Email"=>"The emails do not match."))) {
			self::update(self::$tablename, array("email"=>$email), array("id"=>$user_id));
			$user = self::find_where(self::$tablename, array("id"=>$user_id));
			Session::write("user", $user);
			Session::setFlash("alert-success", "Your email has been updated.<br>");
		} else {
			Session::setFlash("alert-danger", self::display(Validator::$errors));
		}
	}

	/**
	* Changes password
	* @param string $old_password
	* @param string $password
	* @param string $password_confirmation
	* @param array $user
	*/
	public static function change_password($old_password, $password, $password_confirmation, $user) {
		if (Validator::not_empty(array($old_password, $password, $password_confirmation)) && Validator::matching($password, $password_confirmation, array("Password"=>"The passwords do not match."))) {
			if (password_verify($old_password, $user[0]['password_hash'])) {
				$password_hash = password_hash($password, PASSWORD_BCRYPT);
				self::update(self::$tablename, array("password_hash"=>$password_hash), array("id"=>$user[0]["id"]));
				$user = self::find_where(self::$tablename, array("id"=>$user[0]["id"]));
				Session::write("user", $user);
				Session::setFlash("alert-success", "Your password has been updated.<br>");
			} else {
				Session::setFlash("alert-danger", "Incorrect password.");
			}
		} else {
			Session::setFlash("alert-danger", self::display(Validator::$errors));
		}
	}

	/**
	* Redirects user to home if already logged in
	*/
	public static function already_logged_in() {
		if (self::logged_in()) {
			Session::setFlash("alert-danger", "You have already logged in.");
			header("Location: index.php");
		}
	}

	/**
	* Redirects to home if not logged in
	*/
	public static function not_logged_in() {
		if (!Session::exist("user")) {
			Session::setFlash("alert-danger", "You have not logged in.");
			header('Location: index.php');
			exit();
		} else {
			return Session::get("user");
		}
	}

	private static function logged_in() {
		return Session::exist('user');
	}

	private static function remember_me($user) {
		$remember_token = self::str_random(250);
		self::update(self::$tablename, array("remember_token"=>$remember_token), array("id"=>$user[0]["id"]));
		setcookie("remember", $user[0]["id"]."==".$remember_token, time()+60*60*24*7);
	}

	private static function display($to_display) {
		$output = "The form contains error: <br>";
		foreach ($to_display as $key => $value) {
			$output .= $key.": ".$value;
		}
		return $output;
	}

	private static function str_random($len) {
		$result = "";
		$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$array = str_split($char);
		for ($i=0; $i < $len; $i++) {
			$randchar = $array[array_rand($array)]; 
			$result .= $randchar;
		}
		return $result;
	}

}