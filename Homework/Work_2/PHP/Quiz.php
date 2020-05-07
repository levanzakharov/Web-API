<?php
session_start();
include "DB.php";
include "Check.php";

class Quiz{
    public $conn;
    public $check;
    public $EnglishArray;

    function __construct(){
        $db = new Db();
        $this->conn = $db->connection(); 
        $this->check = new check();
        }
  
    function SelectQuestions(){
        $stmt = $this->conn->prepare("SELECT DISTINCT `Question`, `CorrectAns`, `WrongAns` FROM `kitxvebi` ORDER BY rand() LIMIT 5");
        $stmt->execute();
        $data = $stmt->fetchAll();
        $this->EnglishArray = $data;
        return $data;
    }

    function Select($Question){
        $stmt = $this->conn->prepare("SELECT `Id`, `Question`, `CorrectAns`, `WrongAns` FROM `kitxvebi` WHERE Question=:Question");
            $stmt->bindParam(':Question', $Question);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
    }

    function CheckAnswers($values){
        $mtvleli = 0;
        for ($i=0; $i < 5; $i++) {
            if($_SESSION["Questions"][$i]["CorrectAns"]==$values[$i]){
                $mtvleli += 1;
            }
        }
        return $mtvleli;
    }

    function SaveResult($Score){
        $datest = $_SESSION["TestStart"]; 
        date_default_timezone_set("Asia/Tbilisi");   
        $TestStart = new DateTime($datest);
        $TestEnd = new DateTime();
        $TestDuration = $TestStart->diff($TestEnd)->format("%i:%s Minute");

        $TestStart = $TestStart->format("Y-m-d H:i:s");
        $TestEnd = $TestEnd->format("Y-m-d H:i:s");
        $stmt = $this->conn->prepare("INSERT INTO `test`(`TestStart`, `TestEnd`, `TestDuration`, `Score`) VALUES (:TestStart,:TestEnd,:TestDuration,:Score)");
        $stmt->bindParam(':TestStart', $TestStart);
        $stmt->bindParam(':TestEnd', $TestEnd);
        $stmt->bindParam(':TestDuration', $TestDuration);
        $stmt->bindParam(':Score', $Score);
        $stmt->execute();

        echo "Your Score is ".$Score;
    }
}

$Quiz = new Quiz();
if(isset($_POST['submit'])){
    $values = array($_POST["q0"],$_POST["q1"],$_POST["q2"],$_POST["q3"],$_POST["q4"]);
    $result = $Quiz->CheckAnswers($values);
    $Quiz->SaveResult($result);
    session_destroy();
}



?>