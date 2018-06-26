<?php
define("ROOT", $_SERVER['HTTP_HOST'].'/personal_site/');
spl_autoload_register('app_autoload');

function app_autoload($classname) {
	if (strstr($_SERVER['REQUEST_URI'], 'fr')) {
		require '../core/'.$classname.'.php';
	} else {
		require 'core/'.$classname.".php";
	}
}

Session::get_Instance();
User::remember_from_cookies();

