<?php

class Home extends Controller{
//this is for not talking empty value from URL
    function index(){
        $this->view("home");
    }

  

}