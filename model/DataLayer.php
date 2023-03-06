<?php

//needs a PDO_Config.php in cPanel file manager
require_once ($_SERVER['DOCUMENT_ROOT'].'/../pdo_config.php');

class DataLayer
{
    // Database connection object
    private $_dbh;

    function __construct()
    {
        try {
            //Instantiate a PDO object
            $this->_dbh = new PDO(DB_DRIVER, USERNAME, PASSWORD);
            //echo 'Successful!';
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    static function getPets()
    {
        return array("Dogs", "Cats", "Rabbits");
    }
}