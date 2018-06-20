<?php
define("ROOT", $_SERVER['HTTP_HOST'].'/personal_site/');
spl_autoload_register('app_autoload');

function app_autoload($classname) {
	require 'core/'.$classname.".php";
}

Session::get_Instance();
User::remember_from_cookies();

