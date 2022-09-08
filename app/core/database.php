<?php

class Database
{
    public function db_connect()
    { //id provate then we can only call it inside the class inside the function 
        try {

            // $string = DB_TYPE."mysql:host=".DB_HOST."dbname=".DB_NAME;;
            $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public  function read($qry, $data = [])
    {
    }

    public function write($qry, $data = [])
    {
    }
}
