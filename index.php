<?php
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
