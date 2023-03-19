<?php

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
     * @return
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
     * @return
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