<?php
    class Register extends Controller
    {
        public $UserModel;

        public function __construct()
        {
            $this->UserModel = $this->model('UserModel');
        }


        public function Index(...$params)
        {
            $this->view('master1', [
                'folder' => $params[0],
                'page' => $params[1]
            ]);
        }

        //POST
        public function HandleRegister()
        {
            if (isset($_POST['btnRegister'])) {
                $username = $_POST['username'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $email = $_POST['email'];
                $fullname = $_POST['fullname'];
                $address = $_POST['address'];

                $result = $this->UserModel->Insert($username, $password, $email, $fullname, $address);

                $this->view('master1', [
                    'folder' => 'register',
                    'page' => 'index',
                    'result' => $result
                ]);
            }
        }
    }
