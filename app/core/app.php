<?php

class app{

    private $controller  = "home"; ///this is from controllers/home.php
    private $method = "index";
    private $params = [];
  
   public  function __construct()
    {
        // echo("hello");
        // print_r($_GET); //this is print readable 
        $url = $this->splitURL();
      
    show($url);
      
    } 
    

    private function splitURL()//public beacause we want to use it outside the class
    {

        return explode('/', $_GET['url']);

    }
       
}