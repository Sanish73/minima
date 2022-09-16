
<?php

class Upload_file
{
    function upload()
    {
        $DB = new Database();
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
            $arr['username'] = $_POST['username'];
            $arr['password'] = $_POST['password'];
            $arr['email'] = $_POST['email'];
            $arr['url_address'] =  get_random_string_max(60);
            $arr['date'] = date("y-m-d H:i:s");

            $qry = "INSERT INTO users (username , password, email, url_address , date) values(:username, :password, :email, :url_address , :date)";
            $data = $DB->write($qry, $arr);

            if ($data) {
                header("Location:" . ROOT . "login");
                die;
            }
        }
    }
}
