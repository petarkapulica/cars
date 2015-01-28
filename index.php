<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);

function vd($value, $die = true){
    echo '<pre>';
    var_dump($value);
    if($die){
        die;
    }
}


session_start();

function __autoload($class)
{
    require_once ('libs/'.$class.'.php');
}

$bootstrap = new Bootstrap();
$bootstrap->run();