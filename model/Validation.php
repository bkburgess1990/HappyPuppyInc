<?php

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
}