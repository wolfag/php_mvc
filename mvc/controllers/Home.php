<?php
class Home extends Controller
{
    public function SayHi()
    {
        $teo = $this->model("StudentModel");
        echo $teo->GetStudents();
    }

    public function Show()
    {
        echo "Home - show";
    }

    public function Sum($a, $b)
    {
        $model = $this->model("StudentModel");
        $data = $model->Sum($a, $b);
        $this->view('master-layout2', [
            'page'=>'sum',
            'number'=>$data,
            'title'=>'test sum function'
        ]);
    }
}
