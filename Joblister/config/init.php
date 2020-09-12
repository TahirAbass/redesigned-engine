<?php 
// Start session
session_start();

// config File
require_once 'config.php';

// include Helpers
require_once'helpers/system_helper.php';
//Autolaoder
function __autoload($class_name){
require_once 'lib/'.$class_name. '.php';

}


