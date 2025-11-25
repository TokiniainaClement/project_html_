<?php

namespace library\model;

use PDO;

class StudentManager extends Model
{
    public function show(): array
    {
        $sql = "SELECT student_name, course, student_status FROM students ORDER BY student_name DESC";
        $res = $this->db->query($sql);
        $datas = $res->fetchAll(PDO::FETCH_ASSOC);

        return $datas;
    }
}
