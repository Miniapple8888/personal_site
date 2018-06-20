<?php

/**
 * Manage supervariable $_SESSION
 */
class Session extends Model{

	private static $instance;
	protected $tablename = "users";

	public static function get_Instance() {
		if (!isset(self::$instance)) {
			self::$instance = new Session();
		} return self::$instance;
	}
	
	public function __construct() {
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	}

	public static function exist($key) {
		return isset($_SESSION[$key]);
	}

	public static function write($key, $value) {
		self::get_Instance();
		$_SESSION[$key] = $value;
	}

	public static function get($key) {
		return $_SESSION[$key];
	}

	public static function delete($key) {
		self::get_Instance();
		unset($_SESSION[$key]);
	}

	public static function setFlash($param, $value) {
		self::get_Instance();
		$_SESSION["flash"] = "<div class='". $param ."'>".$value."</div>";
	}

}