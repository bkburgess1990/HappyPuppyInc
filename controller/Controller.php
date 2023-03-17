<?php

class Controller
{
    private $_f3; //Fat-Free object

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        //Instantiate a view
        $view = new Template();
        echo $view->render("views/home.html");
    }

    function admin()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/admin1.html");
    }

    function adminPage()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/adminPage.php");
    }

    function apply()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/apply.html");
    }

    function form()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/form.html");
    }

    function aboutUs()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/aboutUs.html");
    }

    function adopt()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/Adopt.html");
    }

    function donation()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/Donate.html");
    }

    function statistc()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/Stats.html");
    }

    function contact()
    {
        //instantiate a view
        $view = new Template();
        echo $view->render("views/contact.html");
    }
}