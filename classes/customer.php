<?php
/**
 * customer class has setters and getters class. it creates a class for customer.
 *
 * this class has setter and getter methods.
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



class Customer
{
    //fields
    private $_firstName;
    private $_lastName;
    private $_address;
    private $_phone;
    private $_email;
    private $_pet;
    private $_message;
    private $_price;
    //constructor
    /** constructor
     * @param $_firstName
     * @param $_lastname
     * @param $_address
     * @param $_breed
     * @param $_neutered
     * @param $_adoptable
     */
    function __construct($firstName = "", $lastName = "", $address = "", $phone = "", $email = "", $pet = "", $message = "", $price = " ")
    {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_address = $address;
        $this->_phone = $phone;
        $this->_email = $email;
        $this->_pet = $pet;
        $this->_message = $message;
        $this->_price = $price;
    }

    /**
     * @return $_firstName
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * @param $firstName
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    /**
     * @return $_LastName
     */
    public function getLastName()
    {
        return $this->_lastName;
    }

    /**
     * @param $lastName
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }

    /**
     * @return
     */
    public function getAddress()
    {
        return $this->_birthday;
    }

    /**
     * @param $address
     */
    public function setAddress($birthday)
    {
        $this->_birthday = $birthday;
    }

    /**
     * @return
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return
     */
    public function getPet()
    {
        return $this->_pet;
    }

    /**
     * @param $pet
     */
    public function setPet($pet)
    {
        $this->_pet = $pet;
    }
    /**
     * @return
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->_pet = $message;
    }

    /**
     * @return
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param $message
     */
    public function setPrice($price)
    {
        $this->_price = $price;
    }
}