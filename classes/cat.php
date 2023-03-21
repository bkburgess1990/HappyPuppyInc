<?php

class Cat extends Pet
{

    //fields
    private $_price;

    /**
     * @return
     * returns the price to adopt
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param $price
     * sets the adoption price. This is determined by pet type and age
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
}