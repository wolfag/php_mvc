<?php
class Home extends Controller{
    function SayHi(){
        $teo = $this->model("StudentModel");
        echo $teo->GetStudents();
    }

    function Show(){
        echo "Home - show";
    }
}
?>