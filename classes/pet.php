<?php

class Pet
{
    //fields
    protected $_petType;
    private $_name;
    protected $_age;
    private $_breed;
    private $_neutered;
    private $_adoptable;

    //constructor
    function __construct($_petType = "", $_name = "", $_age = "", $_breed = "", $_neutered = "", $_adoptable = "")
    {
        $this->_petType = $_petType;
        $this->_name = $_name;
        $this->_age = $_age;
        $this->_breed = $_breed;
        $this->_neutered = $_neutered;
        $this->_adoptable = $_adoptable;
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

    /**
     * @return
     */
    public function getAdoptable()
    {
        return $this->_adoptable;
    }

    /**
     * @param $adoptable
     */
    public function setAdoptable($adoptable)
    {
        $this->_adoptable = $adoptable;
    }
}