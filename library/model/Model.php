<?php

namespace library\model;

use controller\Database;

abstract class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getPDO();
    }
}
