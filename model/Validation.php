<?php
/**
 *
 * This is a validatino class, it validates user's information on PHP side
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
class Validation
{

    /**
     * validName() checks to see that a string is all alphabetic or non-empty.
     * @return boolean
     */
    static function validName($firstName)
    {
        if (preg_match("/\D\w/", $firstName)) {
            return true;
        } else {
            return false;
        }

    }

    /**
     * validName() checks to see that a string is all alphabetic or non-empty.
     * @return boolean
     */
    static function validLastName($lastName)
    {
        if (preg_match("/\D\w/", $lastName)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * validPhone() checks to see that a phone number is valid (you can decide what constitutes a valid phone number, just make sure to check that there are numeric values entered).
     * @return boolean
     */
    static function validPhone($phoneNumber)
    {
        return preg_match("/\d{3}-\d{3}-\d{4}/", $phoneNumber);
    }

    /**
     * validEmail() checks to see that an email address is valid.
     * @return boolean
     */
    static function validEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    /**
     * ValidAddress() checks to see that an address is valid.
     * @return boolean
     */
    static function validAddress($address)
    {
        if($address = "")
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    /**
     * ValidCredit card checks to see that an creditcard is valid.
     * @return boolean
     */
    static function validCreditCard($creditcard)
    {
        return preg_match("/\d/", $creditcard);
    }
    /**
     * ValidZipCode() checks to see that an zipcode is valid.
     * @return boolean
     */
    static function validZipCode($zip)
    {
        return preg_match("/\d/", $zip);
    }
    /**
     * ValidWhere() checks to see a message is valid.
     * @return boolean
     */
    static function validWhere($where)
    {
        if($where != "")
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * validdonation() checks to see that a string is a valid “value” property.
     * @return boolean
     */
    static function validDonation($experience)
    {

        return in_array($experience, DataLayer::getDonation());
    }

}