<?php

class Validation
{
    static function validPet($pet)
    {
        //will search the checkboxes in Adoption page to verify selections match
        return in_array($pet, DataLayer::getPets());
    }
}