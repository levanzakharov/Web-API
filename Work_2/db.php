<?php

class Db{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "web_api";
    public $conn;


    function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e)
            {
            echo $e->getMessage();
            }
    }

    function connection(){
        return $this->conn;
    }
}
?>