<?php

class Home extends Controller
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
        $data['title'] = "web page"; 
        $this->view("minima/index" , $data);
    }
}
