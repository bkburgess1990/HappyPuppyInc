<?php
/**
 * pet class, it has setters and getters for pet fields. it stores information and inserts it
 * to database.
 *
 * this class has setter and getter methods.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net, so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     zeng.zhenhuai@student.greenriver.edu
 * @author     Burgess.Brandon@student.greenriver.edu
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
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