<?php

class Cat extends Pet
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
        $this->_price = $price;
    }
    //methods
}