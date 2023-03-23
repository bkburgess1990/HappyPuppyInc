<?php
/**
 * This class is a cat class. it extends from its parent class.
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