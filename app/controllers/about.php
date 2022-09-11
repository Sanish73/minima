<?php

class About extends Controller{
//this is for not talking empty value from URL
    function index(){
     
        // $this->view("about");
        $data['WEBSITE_TITLE'] = "About Us"; 
        $this->view("minima/about-us" , $data);
      
    }


}