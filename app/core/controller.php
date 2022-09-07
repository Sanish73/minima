<?php


class Controller{
//    protected beacause all teh other controller extends this functoin so it is protected i  guess 
   protected function view($view){
        if(file_exists("../app/views/" . $view. ".php")){
            include("../app/views/" . $view. ".php");
        }else{
            include("../app/views/404.php");
        }

    }

}