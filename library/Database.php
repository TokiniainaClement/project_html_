<?php

namespace controller;

use PDO;
use PDOException;

class Database
{

    public static function getPDO(): PDO
    {
        $dbPath = __DIR__ . "/../database/database.sqlite";

        try {
            $db = new PDO("sqlite:" . $dbPath);

        } catch (PDOException $ex) {
            
            echo "Erreur SQLite : " . $ex->getMessage();
            die();
        }

        return $db;
    }

}
