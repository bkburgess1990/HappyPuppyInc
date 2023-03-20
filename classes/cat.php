<?php

class Cat extends Pet
{

    //fields
    private $_price;

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
        //if pettype is cat and age <2 yr
        if($this->_petType == "Cat") {
            if($this->_age < 2) {
                $_price = 100;
            }
            else {
                $_price = 50;
            }
        }
    }
    //methods
}