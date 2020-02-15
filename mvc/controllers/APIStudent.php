<?php
class APIStudent extends Controller
{
    public function GetStudents()
    {
        $model = $this->model('StudentModel');
        $data=$model->GetStudents();
        $result = [];

        // while ($row=mysqli_fetch_array($data)) {
        //     array_push($result, new Student($row['id'], $row['name'], $row['birthday']));
        // }

        while ($row=mysqli_fetch_object($data)) {
            array_push($result, $row);
        }

        echo json_encode($result);
    }
}

class Student
{
    public $ID;
    public $NAME;
    public $BIRTHDAY;

    public function __construct($id, $name, $birthday)
    {
        $this->id=$id;
        $this->NAME=$name;
        $this->BIRTHDAY=$birthday;
    }
}
