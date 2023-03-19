<?php
//Names: Brandon Burgess
//File Name: Adopt.html
//Date: 2/11/2023
//Description: adoption page where users will be able to look through animals to adopt and click on them
//to see more info about the pet
//controller

//turn off error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');
session_start();
//Instantiate F3 base class
$f3 = Base::instance();

//define a controller
$controller = new Controller($f3);

//define initial route
$f3->route('GET|POST /', function () {
    //instantiate a view
    $GLOBALS['controller']-> home();
});

//define admin1 route
$f3->route('GET /admin1', function () {
    //instantiate a view
    $GLOBALS['controller']-> admin();
});

//define reservationData route
$f3->route('GET|POST /adminPage', function () {
    //instantiate a view
    $GLOBALS['controller']-> adminPage();
});

//define Home route
$f3->route('GET|POST /home', function () {
    //instantiate a view
    $GLOBALS['controller']-> home();
});

//define apply route
$f3->route('GET|POST /apply', function () {
    //instantiate a view
    $GLOBALS['controller']-> apply();
});

//define form route
$f3->route('GET|POST /form', function () {
    //instantiate a view
    $GLOBALS['controller']-> form();
});

//define About Us route
$f3->route('GET|POST /AboutUs', function () {
    //instantiate a view
    $GLOBALS['controller']-> aboutUs();
});

//define Adopt route
$f3->route('GET|POST /Adopt', function () {
    //instantiate a view
    $GLOBALS['controller']-> adopt();
});

//define Adopt route
$f3->route('GET|POST /donate', function () {
    //instantiate a view
    $GLOBALS['controller']-> donation();
});

//define Statistics route
$f3->route('GET|POST /Stats', function () {
    //instantiate a view
    $GLOBALS['controller']-> statistic();
});

//define contact route
$f3->route('GET|POST /contact', function () {
    //instantiate a view
    $GLOBALS['controller']-> contact();
});

//define surrenderForm route
$f3->route('GET|POST /surrenderForm', function () {
    //instantiate a view
    $GLOBALS['controller']-> surrenderForm();
});

//run fat free
$f3->run();