<?php
class Home extends Controller
{
    public function Index(...$params)
    {
        $this->view('master1', [
            'folder'=>$params[0],
            'page'=>$params[1]
        ]);
    }

    public function SayHi()
    {
        $teo = $this->model("StudentModel");
        echo $teo->Test();
    }

    public function Show()
    {
        echo "Home - show";
    }

    public function Sum($a, $b)
    {
        $model = $this->model("StudentModel");
        $data = $model->Sum($a, $b);
        $this->view('master1', [
            'page'=>'sum',
            'number'=>$data,
            'title'=>'test sum function'
        ]);
    }

    public function Students()
    {
        $model = $this->model("StudentModel");
        $data = $model->GetStudents();
        $this->view('master1', [
            'page'=>'list-student',
            'students'=>$data
        ]);
    }
}
