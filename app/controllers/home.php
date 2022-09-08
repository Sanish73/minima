<?php

class Home extends Controller{
//this is for not talking empty value from URL
    function index(){
        // show($a);
        // show($b);
        // show($c);
        $image_class  = $this->loadModel("image_class");
        // show($image_class);
        $this->view("home");
    }

  

}