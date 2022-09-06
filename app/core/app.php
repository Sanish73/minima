<?php

class app
{

    private $controller  = "home"; ///this is from controllers/home.php
    private $method = "index";
    private $params = [];

    public  function __construct()
    {
        // echo("hello");
        // print_r($_GET); //this is print readable 
        $url = $this->splitURL();
        // show($url[0]);//Now only selecting the First path form URL 
        if (file_exists("../app/controllers/" . strtolower($url[0]) . ".php")) { //if file exists then it meaning controller exist
            $this->controller  = strtolower($url[0]);
            unset($url[0]);
            // print_r($_GET);
        }
        // show($url);
        //if we didnt fint file exists then then url[0] doesnot exit but we need it so we set it
        require("../app/controllers/" . $this->controller . ".php");
        //now making the class of the $this->controller beacuase we dont know what its value willl be
        $this->controller = new $this->controller; //class is same as an(home = new home)  
        //now checking url[1]
        if (isset($url[1])) { //(home = new home)->object   ma index vanne method xa ke nai xa ke xaina )
            // show($url[1]);
            if (method_exists($this->controller, $url[1])) { //checking home class or object if is has index method or not
                unset($url[1]);
            }
        }
        show($url); 
    }


    private function splitURL() //public beacause we want to use it outside the class
    {

        return explode('/', trim($_GET['url'], '/'));
    }
}
