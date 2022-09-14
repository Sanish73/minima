<?php


class User
{

    function login($POST)
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
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
            } else {
                $_SESSION['error'] = "Wrong  username and password";
            }
        } else {
            $_SESSION['error'] = "Please Enter valid username and password";
        }
    }

    function signup($POST)
    {
        $DB = new Database();
        $_SESSION['error'] = '';

        if (isset($_POST['username']) && isset($_POST['password']) && isset( $_POST['email'])) {
            $arr['username'] = $_POST['username'];
            $arr['password'] = $_POST['password'];
            $arr['email'] = $_POST['email'];
            $qry = "INSERT INTO users (username , password, email) values(:username, :password, :email)";
            $data = $DB->write($qry, $arr);

            if ($data) {
               header("Location:".ROOT."login");
               die;
            } 

        } else {
            $_SESSION['error'] = "Please Enter valid username and password";
        }
    }

    function check_loged_in()
    { //check whether user is login or not
        $DB = new Database();
        
        if (isset($_SESSION['user_url'])) {
            $arr['user_url'] = $_SESSION['user_url'];
            $qry = "SELECT * FROM users WHERE user_address = :user_url  limit 1 ";
            $data = $DB->read($qry, $arr);

            if (is_array($data)) {
                //logged in
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
                return true;
            }
        }
        return false;
    }
}
