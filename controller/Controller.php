<?php
/**
 *  This is a controller class. it routes user to a specific page.
 *
 *
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net, so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     zeng.zhenhuai@student.greenriver.edu
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 */
class Controller
{

    private $_f3; //Fat-Free object

    /**/
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
        $applicants = $GLOBALS['dataLayer']->getAnimal();
        $this->_f3->set('applicants', $applicants);
        //instantiate a view
        $view = new Template();
        echo $view->render("views/admin1.html");
    }

    function adminPage()
    {

        //Get the data from the model
        $applicants = $GLOBALS['dataLayer']->getApplicants();
        $this->_f3->set('applicants', $applicants);
        //instantiate a view
        $view = new Template();
        echo $view->render("views/adminPage.html");
    }

    function thanks()
    {
        $layer = new DataLayer();
        //Write to Database
        $id = $layer->insertApplicant($_SESSION['customer']);
        $di = $layer->insertAnimal($_SESSION['pets']);
        //instantiate a view
        $view = new Template();
        echo $view->render("views/thanks.html");
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
            if (Validation::validAddress($_POST['address'])) {
                $myPet->setAddress($_POST['address']);
            } else {
                $this->_f3->set('errors["address"]', 'You address can not be empty');
            }
            if (Validation::validWhere($_POST['find'])) {
                $myPet->setPet($_POST['find']);
            } else {
                $this->_f3->set('errors["find"]', 'you must enter a kind');
            }

            if (empty($this->_f3->get('errors'))) {
                $_SESSION['customer'] = $myPet;
                $this->_f3->reroute('surrenderForm');
            }
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
            if (Validation::validAddress($_POST['address'])) {
                $myPet->setaddress($_POST['address']);
            } else {
                $this->_f3->set('errors["address"]', 'You address can not be empty');
            }
            if (empty($this->_f3->get('errors'))) {
                $_SESSION['customer'] = $myPet;
                $this->_f3->reroute('thanks');
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
            if (Validation::validDonation($_POST['amount'])) {
                $myPet->setPrice($_POST['amount']);
            } else {
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
            if (Validation::validAddress($_POST['address'])) {
                $myPet->setAddress($_POST['address']);
            } else {
                $this->_f3->set('errors["address"]', 'You address can not be empty');
            }
            if (Validation::validCreditCard($_POST['credit'])) {
                $credit = $_POST['credit'];
            } else {
                $this->_f3->set('errors["credit"]', 'You credit card can not be empty');
            }
            if (Validation::validZipCode($_POST['zip'])) {
                $zip = $_POST['zip'];
            } else {
                $this->_f3->set('errors["zip"]', 'You zip code can not be empty');
            }
            if (empty($this->_f3->get('errors'))) {
                $_SESSION['customer'] = $myPet;
                $this->_f3->reroute('thanks');
            }
        }
        //instantiate a view
        $view = new Template();
        echo $view->render("views/Donate.html");
    }

    function statistic()
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

    function surrenderForm()
    {
//        $layer = new DataLayer();
//        //Write to Database
//        $id = $layer->insertApplicant($_SESSION['customer']);
//        echo "Order ID: $id";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($_POST['ptype'] == "Cat")
            {
                $myPets = new Cat();
            }
            else
            {
                $myPets = new Dog();
            }
            if (Validation::validName($_POST['pname'])) {
                $myPets->setName($_POST['pname']);
            } else {
                $this->_f3->set('errors["fname"]', 'Your pet name must be alphabetic and non-empty');
            }
            if (Validation::validAddress($_POST['breed'])) {
                $myPets->setBreed($_POST['breed']);
            } else {
                $this->_f3->set('errors["breed"]', 'You breed can not be empty');
            }

            if (empty($this->_f3->get('errors'))) {
                $myPets->setAge($_POST['age']);
                $myPets->setNeutered($_POST['neutered']);
                $myPets->setPetType($_POST['ptype']);
                $_SESSION['pets'] = $myPets;
                $this->_f3->reroute('thanks');
            }
        }
        //instantiate a view
        $view = new Template();
        echo $view->render("views/surrenderForm.html");
    }
}
