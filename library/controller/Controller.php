<?php

namespace library\controller;

class Controller
{
    protected $className;
    protected $res;

    public function __construct()
    {
        $this->res = new $this->className();
    }
}

