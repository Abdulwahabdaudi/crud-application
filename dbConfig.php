<?php

class dbConfig {

public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=app",'root','');
           echo "Connection successfully";
        } catch (Exception $e) {
            echo "Connection failed ".$e;
        }
    }

}