<?php


class Db{
    public static function Connection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "storage";
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