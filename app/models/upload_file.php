
<?php

class Upload_file
{
    function upload($POST , $FILES)
    {
        $DB = new Database();
        if (isset($_POST['title']) && isset($_POST['description']) && isset($_FILES['file'])) {
            //uploading file
            $arr['title'] = $_POST['title'];
            $arr['description'] = $_POST['description'];
            
            $arr['url_address'] =  get_random_string_max(60);
            $arr['date'] = date("y-m-d H:i:s");

            $qry = "INSERT INTO images (title , description, url_address , date) values(:title, :description, :url_address , :date)";
            $data = $DB->write($qry, $arr);

            if ($data) {
                header("Location:" . ROOT . "home");
                die;
            }
        }
    }
}
