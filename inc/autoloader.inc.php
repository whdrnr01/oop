<?php

spl_autoload_register('appAutoLoader');

function appAutoLoader($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    
    if(strpos($url, 'inc') !== false) {
        $path = '../class/';
    } else {
        $path = 'class/';
    }

	$extension = ".class.php";
	require_once $path.$className.$extension;

	
}