<?php

    class UserModel extends DB
    {
        public function Insert($username, $password, $email, $fullname, $address)
        {
            $query = "insert into users(".
                "`username`,".
                "`password`,".
                "`email`,".
                "`fullname`,".
                "`address`".
            ") values(".
                "'{$username}',".
                "'{$password}',".
                "'{$email}',".
                "'{$fullname}',".
                "'{$address}'".
            ")";

            $result = false;

            if (mysqli_query($this->conn, $query)) {
                $result = true;
            }

            return json_encode($result);
        }

        public function CheckUsername($username)
        {
            $query = "select id from users where `username`='$username'";
            $data = mysqli_query($this->conn, $query);
            $result = false;
            if (mysqli_num_rows($data) > 0) {
                $result = true;
            }
            return json_encode($result);
        }
    }
