<?php

namespace library\controller;

class StudentManager extends Controller
{
    protected $className = \library\model\StudentManager::class;

    public function show()
    {
        $datas = $this->res->show();
        echo json_encode($datas);
    }

}

