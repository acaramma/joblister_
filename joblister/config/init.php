<?php 
//Config file
require_once 'config.php';

//Autoloader
fuction__autoload($class_name){
	require_once 'lib/'.$class_name.'.php';
}

echo 'test';