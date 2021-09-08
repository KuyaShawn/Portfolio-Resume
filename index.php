<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once ('vendor/autoload.php');

//start the session
session_start();

//Instantiate Fat-Free
$f3 = Base::instance();
$controller = new portfolioController($f3);

// Home page
$f3->route('GET /', function(){
    $GLOBALS['controller']->about();
});

// Extra page
$f3->route('GET /extras', function(){
    $GLOBALS['controller']->extras();
});


//Run Fat-Free
$f3->run();