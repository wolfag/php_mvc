<?php
class StudentModel extends DB
{
    public function Sum($a, $b)
    {
        return $a+$b;
    }

    public function Test()
    {
        return "Ti";
    }

    public function GetStudents()
    {
        $sql = "select * from student";
        return mysqli_query($this->conn, $sql);
    }

    public function AddStudent()
    {
    }
}
