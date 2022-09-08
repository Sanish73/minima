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
        $DB->db_connect();
        // show($DB);
        $image_class  = $this->loadModel("image_class");
        // show($image_class);
        $this->view("home");
    }
}
