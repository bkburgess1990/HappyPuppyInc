<?php

class Dog extends pet
{

    //fields
    private $_price;
    //constructor
    function __construct($price)
    {
        $this->_price = $price;
    }
    //methods
}