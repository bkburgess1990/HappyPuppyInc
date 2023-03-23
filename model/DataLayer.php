<?php
/**
 *
 * This is a dataLayer class. It contains all the data, and it inserts data into
 * database
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
 * @author     Burgess.Brandon@student.greenriver.edu
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 */

//needs a PDO_Config.php in cPanel file manager
require_once($_SERVER['DOCUMENT_ROOT'] . '/../pdo-config.php');

class DataLayer
{
    // Database connection object
    private $_dbh;
    /**
     * a constructor
     */
    function __construct()
    {
        try {
            //Instantiate a PDO object
            $this->_dbh = new PDO(DB_DRIVER, USERNAME, PASSWORD);
            //echo 'Successful!';
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * this method inserts data into database.
     */
    function insertApplicant()
    {
        // 1. Define a query
        $sql = "INSERT INTO customers (firstName,lastName,address,phone,email,pet,message,price) VALUES 
        (:fname,:lname,:address,:phone,:email,:pet,:message,:price)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. bind the parameters
        $fname = $_SESSION['customer']->getFirstName();
        $lname = $_SESSION['customer']->getLastName();
        $address = $_SESSION['customer']->getAddress();
        $phone = $_SESSION['customer']->getPhone();
        $email = $_SESSION['customer']->getEmail();
        $pet = $_SESSION['customer']->getPet();
        $message = $_SESSION['customer']->getMessage();
        $price = $_SESSION['customer']->getPrice();

        $statement->bindParam(':fname', $fname);
        $statement->bindParam(':lname', $lname);
        $statement->bindParam(':address', $address);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':pet', $pet);
        $statement->bindParam(':message', $message);
        $statement->bindParam(':price', $price);


        //4. Execute the query
        $statement->execute();

        //5. Process the results
        $id = $this->_dbh->lastInsertId();
        return $id;

    }
    /**
     * getApplicants () gets all the data from database
     *
     */
    function getApplicants()
    {
        //1. Define the query
        $sql = "SELECT * FROM customers ORDER BY lastName";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the query
        $statement->execute();

        //5. Process the results
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    /**
     * this method inserts animals' data into database.
     */
    function insertAnimal()
    {
        // 1. Define a query
        $sql = "INSERT INTO pet (petType,name,age,breed,neutered,adoptable,price) VALUES 
        (:petType,:name,:age,:breed,:neutered,:adoptable,:price)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. bind the parameters
        $petType = $_SESSION['pets']->getPetType();
        $name = $_SESSION['pets']->getName();
        $age = $_SESSION['pets']->getAge();
        $breed = $_SESSION['pets']->getBreed();
        $neutered = $_SESSION['pets']->getNeutered();
        $adoptable = $_SESSION['pets']->getAdoptable();
        $price = "100";

        $statement->bindParam(':petType', $petType);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':age', $age);
        $statement->bindParam(':breed', $breed);
        $statement->bindParam(':neutered', $neutered);
        $statement->bindParam(':adoptable', $adoptable);
        $statement->bindParam(':price', $price);


        //4. Execute the query
        $statement->execute();

        //5. Process the results
        $id = $this->_dbh->lastInsertId();
        return $id;

    }
    /**
     * this method gets data from database
     */
    function getAnimal()
    {
        //1. Define the query
        $sql = "SELECT * FROM pet ORDER BY name";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the query
        $statement->execute();

        //5. Process the results
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * this method gets pet data from array.
     */
        static function getPets()
    {
        return array("Dogs", "Cats", "Rabbits");
    }

    /**
     * getDonation gets an array contains ("25,50,100,200,500,1000");
     * @return array
     */


    static function getDonation()
    {
        return array("25", "50", "100","200","500","1000");
    }





}