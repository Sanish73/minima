<?php


class User
{

    function login()
    {
        $DB = new Database();
        $_SESSION['error'] = '';

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $arr['username'] = $_POST['username'];
            $arr['password'] = $_POST['password'];
            $qry = "SELECT * FROM users WHERE username = :username && password = :password limit 1 ";
            $data = $DB->read($qry, $arr);

            if (is_array($data)) {
                //logged in
                $_SESSION['user-id'] = $data[0]->userid;
                $_SESSION['user-name'] = $data[0]->username;
            }else{
                $_SESSION['error'] = "Wrong  username and password"
            }
        }else{
            $_SESSION['error'] = "Please Enter valid username and password"
        }
    }

    function signup()
    {
    }

    function check_loged_in()
    { //check whether user is login or not

    }
}
