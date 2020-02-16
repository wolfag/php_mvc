<?php
class Ajax extends Controller
{
    public $UserModel;

    public function __construct()
    {
        $this->UserModel = $this->model('UserModel');
    }

    public function CheckUsername()
    {
        $username = $_POST["username"];
        echo $this->UserModel->CheckUsername($username);
    }
}
