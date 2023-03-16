<?php

class Dog extends pet
{

    //fields
    private $_price;
    //constructor
    function __construct($_price)
    {
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