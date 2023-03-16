<?php

class Cat extends pet
{

    //fields
    private $_price;
    //constructor
    function __construct($_price)
    {
//        parent::__construct()
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