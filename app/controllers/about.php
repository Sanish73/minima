<?php

class About extends Controller{
//this is for not talking empty value from URL
    function index(){
     
        // $this->view("about");
        $data['page_title'] ="ts";
        $this->view("minima/about-us" , $data);
      
    }


}