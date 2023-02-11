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

//define Application route
$f3->route('GET|POST /Form', function () {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/Form.html");
});

//define About Us route
$f3->route('GET|POST /AboutUs', function () {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/aboutUs.html");
});

//define Adopt route
$f3->route('GET|POST /Adopt', function () {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/Adopt.html");
});

//define Adopt route
$f3->route('GET|POST /donate', function () {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/Donate.html");
});

//define Statistics route
$f3->route('GET|POST /Stats', function () {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/Stats.html");
});


//run fat free
$f3->run();