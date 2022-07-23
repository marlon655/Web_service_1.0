<?php
	session_start();
	$autoload = function($class){
		include('classes/'.$class.'.php');
	};
	spl_autoload_register($autoload);

	//HOST,DATABASE,USER,PASSWROD
	define('INCLUDE_PATH', 'http://localhost/Web_service_1.0/');
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'web_service_1.0');
	define('BASE_DIR_PAINEL',__DIR__);
