<?php

class Signup extends Controller
{
    //this is for not talking empty value from URL
    function index()
    {
        // show($a);
        // show($b);
        // show($c);
        // $DB = new Database();
        // $data['code']  = $DB->read("SELECT * FROM images");
       
        // show($data[0]->image);
        // show($DB);
        // $image_class  = $this->loadModel("image_class");
        // show($image_class);
        $data['WEBSITE_TITLE'] = "Signup"; 
        // $data['page_title'] = "web page"; 
        if(isset($_POST['email']))
        {
          // $post = $_POST['email'];
          // echo $post;
            $user = $this->loadModel("user");
            $user->signup($_POST);

        }elseif(isset($_POST['username']) && !isset($_POST['email'])){

            $user = $this->loadModel("user");
            $user->login($_POST);
        }
        $this->view("minima/signup" , $data);
    }
}
