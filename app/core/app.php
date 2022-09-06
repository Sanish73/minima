<?php

class app{
  
   public  function __construct()
    {
        // echo("hello");
        // print_r($_GET); //this is print readable 
        $url = $this->splitURL();
        echo("<pre>");
        print_r($url);
        echo("</spre>");
    } 
    

    private function splitURL()//public beacause we want to use it outside the class
    {

        return explode('/', $_GET['url']);

    }
       
}