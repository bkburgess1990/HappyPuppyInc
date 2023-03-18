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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $myPet = new Customer();
            if(Validation::validName($_POST['fname']))
            {
                $myPet->setFirstName($_POST['fname']);
            }
            else
            {
                $this->_f3->set('errors["fname"]', 'Your First name must be alphabetic and non-empty');
            }
            if(Validation::validLastName($_POST['lname']))
            {
                $myPet->setLastName($_POST['lname']);
            }
            else
            {
                $this->_f3->set('errors["Lname"]', 'Your Last name must be alphabetic and non-empty');
            }
            if(Validation::validEmail($_POST['email']))
            {
                $myPet->setEmail($_POST['email']);
            }
            else
            {
                $this->_f3->set('errors["email"]', 'You must enter an email in a proper format');
            }
            if(Validation::validPhone($_POST['phone']))
            {
                $myPet->setPhone($_POST['phone']);
            }
            else
            {
                $this->_f3->set('errors["phone"]', 'You must enter digits and xxx-xxx-xxxx');
            }
            if (!Validation::validAddress($_POST['address'])) {
                $myPet->setPhone($_POST['address']);
            } else {
                $this->_f3->set('errors["address"]', 'You address can not be empty');
            }
            if (Validation::validWhere($_POST['find'])) {
                $myPet->setPhone($_POST['find']);
            } else {
                $this->_f3->set('errors["find"]', 'you must enter where did you find this animal');
            }
        }
        if (empty($this->_f3->get('errors'))) {
        }
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $myPet = new Customer();
            if (Validation::validName($_POST['fname'])) {
                $myPet->setFirstName($_POST['fname']);
            } else {
                $this->_f3->set('errors["fname"]', 'Your First name must be alphabetic and non-empty');
            }
            if (Validation::validLastName($_POST['lname'])) {
                $myPet->setLastName($_POST['lname']);
            } else {
                $this->_f3->set('errors["Lname"]', 'Your Last name must be alphabetic and non-empty');
            }
            if (Validation::validEmail($_POST['email'])) {
                $myPet->setEmail($_POST['email']);
            } else {
                $this->_f3->set('errors["email"]', 'You must enter an email in a proper format');
            }
            if (Validation::validPhone($_POST['phone'])) {
                $myPet->setPhone($_POST['phone']);
            } else {
                $this->_f3->set('errors["phone"]', 'You must enter digits and xxx-xxx-xxxx');
            }
            if (!Validation::validAddress($_POST['address'])) {
                $myPet->setPhone($_POST['address']);
            } else {
                $this->_f3->set('errors["address"]', 'You address can not be empty');
            }
        }
        //instantiate a view
        $view = new Template();
        echo $view->render("views/Adopt.html");
    }

    function donation()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $myPet = new Customer();
            if(Validation::validDonation($_POST['amount']))
            {
                $myPet->setPet($_POST['amount']);
            }
            else{
                $this->_f3->set('errors["amount"]', 'amount is invalid');
            }
            if (Validation::validName($_POST['fname'])) {
                $myPet->setFirstName($_POST['fname']);
            } else {
                $this->_f3->set('errors["fname"]', 'Your First name must be alphabetic and non-empty');
            }
            if (Validation::validLastName($_POST['lname'])) {
                $myPet->setLastName($_POST['lname']);
            } else {
                $this->_f3->set('errors["Lname"]', 'Your Last name must be alphabetic and non-empty');
            }
            if (Validation::validEmail($_POST['email'])) {
                $myPet->setEmail($_POST['email']);
            } else {
                $this->_f3->set('errors["email"]', 'You must enter an email in a proper format');
            }
            if (Validation::validPhone($_POST['phone'])) {
                $myPet->setPhone($_POST['phone']);
            } else {
                $this->_f3->set('errors["phone"]', 'You must enter digits and xxx-xxx-xxxx');
            }
            if (!Validation::validAddress($_POST['address'])) {
                $myPet->setPhone($_POST['address']);
            } else {
                $this->_f3->set('errors["address"]', 'You address can not be empty');
            }
            if (Validation::validCreditCard($_POST['credit'])) {
                $myPet->setPhone($_POST['credit']);
            } else {
                $this->_f3->set('errors["credit"]', 'You credit card can not be empty');
            }
            if (Validation::validZipCode($_POST['zip'])) {
                $myPet->setPhone($_POST['zip']);
            } else {
                $this->_f3->set('errors["zip"]', 'You zip code can not be empty');
            }
        }
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