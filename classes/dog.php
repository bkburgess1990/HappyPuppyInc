<?php
/**
 * this is a dog class, it extends from pet class.
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