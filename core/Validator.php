<?php

/**
 * Validates user input (static class)
 */
class Validator {

	public static $errors = [];

	public static function not_empty($fields) {
		$not_empty = true;
		foreach ($fields as $value) {
			if (empty($value)) {
				$not_empty = false;
			}
		}
		if(!$not_empty) {
			self::$errors["Fields"] = "You must fill out the entire form.";
		}	return $not_empty;
	}

	public static function matching($original, $confirmation, $error_msg) {
		if(!($original == $confirmation)) {
			self::$errors[key($error_msg)] = $error_msg[key($error_msg)];
			return false;
		} else {
		    return true; 
		}
	}

	public static function unique_email($email, $tablename="users") {
		$user = User::find_where($tablename, array("email"=>$email));
		if(empty($user)){
			return true;
		} else {
			self::$errors["Email"] =  "This email is already taken.";
			return false;
		}
	}

	public static function valid_email($email) {
		$valid = !filter_var($email, FILTER_VALIDATE_EMAIL) ? false : true;
		if(!$valid) { 
			self::$errors["Email"] = "This is not a valid email.";
		}
		return $valid;
	}
}