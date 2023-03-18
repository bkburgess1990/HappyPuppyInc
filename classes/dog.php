<?php

class Dog extends Pet
{

    //fields
    private $_price;
    //constructor
    function __construct($_petType, $_name, $_age, $_breed, $_neutered, $_adoptable, $_price)
    {
        parent::__construct($_petType, $_name, $_age, $_breed, $_neutered, $_adoptable);
        $this->_price = $_price;
    }

    /**
     * @return
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        //if pettype is dog and age <1 yr

        // if age is > 1 year

        $this->_price = $price;
    }
}