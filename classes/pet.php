<?php

class Pet
{
    //fields
    private $_petType;
    private $_name;
    private $_age;
    private $_breed;
    private $_neutered;
    private $_adoptable;

    //constructor
    function __construct($petType, $name, $age, $breed, $neutered, $adoptable)
    {
        $this->_petType = $petType;
        $this->_name = $name;
        $this->_age = $age;
        $this->_breed = $breed;
        $this->_neutered = $neutered;
        $this->_adoptable = $adoptable;
    }

    /**
     * @return
     */
    public function getPetType()
    {
        return $this->_petType;
    }

    /**
     * @param $petType
     */
    public function setPetType($petType)
    {
        $this->_petType = $petType;
    }

    /**
     * @return
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return
     */
    public function getBreed()
    {
        return $this->_breed;
    }

    /**
     * @param $breed
     */
    public function setBreed($breed)
    {
        $this->_breed = $breed;
    }

    /**
     * @return boolean
     */
    public function getNeutered()
    {
        return $this->_neutered;
    }

    /**
     * @param $neutered
     */
    public function setNeutered($neutered)
    {
        $this->_neutered = $neutered;
    }
}