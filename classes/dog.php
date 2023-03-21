<?php

class Dog extends Pet
{

    //fields
    private $_price;

    /** constructor
     * @return
     * returns the price to adopt the animal
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param $price
     * sets the price to adopt the animal. This is determined by the pet type and age.
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
        $_price = $price;
        return $_price;
    }
}