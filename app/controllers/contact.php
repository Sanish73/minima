<?php

class Contact extends Controller{
//this is for not talking empty value from URL
    function index(){
     
        // $this->view("about");
        $data['WEBSITE_TITLE'] = "Contact Us"; 
        $this->view("minima/contact" , $data);
      
    }


}