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
$controller = new dealerController($f3);
$dataLayer = new dealerDataLayer();

//Home page
$f3->route('GET /', function(){
    $GLOBALS['controller']->home();
});

// Inventory page
$f3->route('GET /inventory', function(){
    $GLOBALS['controller']->inventory();
});

// Service page
$f3->route('GET|POST /services', function(){
    $GLOBALS['controller']->services();
});

// Service page
$f3->route('GET|POST /warrantyClients', function(){
    $GLOBALS['controller']->warrantyClients();
});

// Summary page
$f3->route('GET /sumary', function(){
    $GLOBALS['controller']->summary();
});

// Admin page
$f3->route('GET|POST /admin', function(){
    $GLOBALS['controller']->admin();
});

// Admin login page
$f3->route('GET|POST /admin_login', function(){
    $GLOBALS['controller']->login();
});

// Admin logout page
$f3->route('GET|POST /admin_logout', function(){
    $GLOBALS['controller']->logout();
});

//Run Fat-Free
$f3->run();