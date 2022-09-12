<?php

class Database
{
    public function db_connect()
    { //id provate then we can only call it inside the class inside the function 
        try {

            // $string = DB_TYPE."mysql:host=".DB_HOST."dbname=".DB_NAME;;
           return  $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public  function read($qry, $data = [])
    {
        //mathi ko $db bata return aako value yo $DB ma aauxa ..nulll vayo vaney value aaayana vanxa 
        $DB = $this->db_connect(); //this makes connection 
        $stm = $DB->prepare($qry); //prepare statement its just to aovid beaignh hack beacuae we  put out variable in a queary ina a seperate place
        $check = $stm->execute($data);

        if (count($data) == 0) {

            $stm = $DB->query($qry);
            $check = 0;
            if ($stm) {
                $check = 1;
            }
        } else {
            $check = $stm->execute($data);
        }

        if ($check) {
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function write($qry, $data = [])
    {
        $DB = $this->db_connect(); //this makes connection 
        $stm = $DB->prepare($qry); //prepare statement its just to aovid beaignh hack beacuae we  put out variable in a queary ina a seperate place
        $check = $stm->execute($data);

        if (count($data) == 0) {

            $stm = $DB->query($qry);
            $check = 0;
            if ($stm) {
                $check = 1;
            }
        } else {
            $check = $stm->execute($data);
        }

        if ($check) {
            return true;
        } else {
            return false;
        }
    }
}
