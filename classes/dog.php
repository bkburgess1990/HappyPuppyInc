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
        //if pettype is dog and age <2 yr
        if($this->_petType == "Dog") {
            if($this->_age < 2) {
                $price = 200;
            }
            else {
                $price = 100;
            }
        }
        return $price;
    }
}