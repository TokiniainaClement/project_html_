<?php
require "library/controller/Controller.php";
require "library/controller/StudentManager.php";
require "library/model/Model.php";
require "library/model/StudentManager.php";
require "library/Database.php";


if(isset($_GET["action"]))
{
    if($_GET["action"] === "show_student")
    {
        $res = new \library\controller\StudentManager();
        $res->show();
    }
}

