<?php

class Db{
    function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "quiz";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $conn;
            }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>