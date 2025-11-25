<?php

namespace controller;

use PDO;
use PDOException;

class Database {

    public static function getPDO(): PDO
    {
        $host = "mysql:host=localhost;dbname=student_management_system;";
        $username = "root";
        $mdp = "";

        try {
            $db = new PDO($host, $username, $mdp);
        }
        catch (PDOException $ex)
        {
            echo "Erreur : " . $ex->getMessage();
            die();
        }

        return $db;
    }
}

