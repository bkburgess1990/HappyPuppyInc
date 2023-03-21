<?php

/**
 *
 */
class Pet
{
    //fields
    protected $_petType;
    private $_name;
    protected $_age;
    private $_breed;
    private $_neutered;
    private $_adoptable;

    /** constructor
     * @param $_petType
     * @param $_name
     * @param $_age
     * @param $_breed
     * @param $_neutered
     * @param $_adoptable
     */
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
     * returns the type of pet (cat/dog)
     */
    public function getPetType()
    {
        return $this->_petType;
    }

    /**
     * @param $petType
     * sets the pet type
     */
    public function setPetType($petType)
    {
        $this->_petType = $petType;
    }

    /**
     * @return
     * returns the pet's name
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param $name
     * sets the pet's name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return
     * returns the pet's age
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param $age
     * sets the pet's age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return
     * returns the pet's breed
     */
    public function getBreed()
    {
        return $this->_breed;
    }

    /**
     * @param $breed
     * sets the pet's breed
     */
    public function setBreed($breed)
    {
        $this->_breed = $breed;
    }

    /**
     * @return boolean
     * returns whether or not the pet is neutered/spayed
     */
    public function getNeutered()
    {
        return $this->_neutered;
    }

    /**
     * @param $neutered
     * sets whether or not the pet is neutered/spayed
     */
    public function setNeutered($neutered)
    {
        $this->_neutered = $neutered;
    }

    /**
     * @return
     * returns adoption status (this needs to be set in the admin page)
     */
    public function getAdoptable()
    {
        return $this->_adoptable;
    }

    /**
     * @param $adoptable
     * sets the adoption status of the animal (Adoptable/not adoptable) based on factors like vax status, etc. (set by admin page)
     */
    public function setAdoptable($adoptable)
    {
        $this->_adoptable = $adoptable;
    }
}