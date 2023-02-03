<?php
//controller

//turn off error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//Instantiate F3 base class
$f3 = Base::instance();

//define initial route
$f3->route('GET|POST /', function () {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/home.html");
});

//define  Home route
$f3->route('GET|POST /home', function () {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/home.html");
});

//define Application route
$f3->route('GET|POST /apply', function () {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/apply.html");
});

//run fat free
$f3->run();