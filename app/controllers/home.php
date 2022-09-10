<?php

class Home extends Controller
{
    //this is for not talking empty value from URL
    function index()
    {
        // show($a);
        // show($b);
        // show($c);
        $DB = new Database();
        $data['code']  = $DB->read("SELECT * FROM images");
        $data['title'] = "web page"; 
        // show($data[0]->image);
        // show($DB);
        $image_class  = $this->loadModel("image_class");
        // show($image_class);
        $this->view("home" , $data);
    }
}
