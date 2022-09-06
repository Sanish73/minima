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
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // show($url); // ------(compare with down show(array..))

        // now making URL[-] array  indexes in increasing order
        // show(array_values($url));//-------(compare with up show($utl))
        // ==running class and method 
        $this->params =  array_values($url);
        call_user_func_array([$this->controller,  $this->method],   $this->params); // Call the  $this->controller->$this->method method with 2 arguments
        //   home class vitra ko index vanne method ma tyo new created array pathako
    }


    private function splitURL() //public beacause we want to use it outside the class
    {

        return explode('/', trim($_GET['url'], '/'));
    }
}
