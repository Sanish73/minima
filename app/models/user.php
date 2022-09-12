<?php


class User
{

    function login()
    {
        $DB = new Database();

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $arr['username'] = $_POST['username'];
            $arr['password'] = $_POST['password'];
            $qry = "SELECT * FROM users WHERE username = :username && password = :password limit 1 ";
            $data = $DB->read($qry, $arr);

            if (is_array($data)) {
                //logged in
                $_SESSION['user-id'] = $data[0]->userid;
                $_SESSION['user-name'] = $data[0]->username;
            }
        }
    }

    function signup()
    {
    }

    function check_login()
    { //check whether user is login or not

    }
}
