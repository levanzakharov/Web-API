<?php
include "DB.php";
include "Check.php";

class Question{
    public $conn;
    public $check;

    function __construct(){
        $db = new Db();
        $this->conn = $db->connection(); 
        $this->check = new check();
        }

    function SelectAll(){
        $stmt = $this->conn->prepare("SELECT * FROM `kitxvebi`");
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    function Select($Id){
        $stmt = $this->conn->prepare("SELECT `Id`, `Question`, `CorrectAns`, `WrongAns` FROM `kitxvebi` WHERE Id=:Id");
            $stmt->bindParam(':Id', $Id);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
    }

    function Insert($Question,$CorrectAns,$WrongAns){
        if ($this->check->checkLength($Question) && $this->check->checkLength($CorrectAns) && $this->check->checkLength($WrongAns)){
            $stmt = $this->conn->prepare("INSERT INTO `kitxvebi`(`Question`, `CorrectAns`, `WrongAns`) VALUES (:Question,:CorrectAns,:WrongAns)");
            $stmt->bindParam(':Question', $Question);
            $stmt->bindParam(':CorrectAns', $CorrectAns);
            $stmt->bindParam(':WrongAns', $WrongAns);
            $stmt->execute();
            echo "New Record Added";
        }
    }

    function Update($Id,$Question,$CorrectAns,$WrongAns){
        if ($this->check->checkLength($Question) && $this->check->checkLength($CorrectAns) && $this->check->checkLength($WrongAns)){
            $stmt = $this->conn->prepare("UPDATE `kitxvebi` SET `Question`=:Question,`CorrectAns`=:CorrectAns,`WrongAns`=:WrongAns WHERE Id = :Id");
            $stmt->bindParam(':Id', $Id);
            $stmt->bindParam(':Question', $Question);
            $stmt->bindParam(':CorrectAns', $CorrectAns);
            $stmt->bindParam(':WrongAns', $WrongAns);
            $stmt->execute();
            echo "Record updated";
        }
    }

    function Delete($Id){
        if ($this->check->checkId($Id))
        {
            $stmt = $this->conn->prepare("DELETE FROM `kitxvebi` WHERE Id=:Id");
            $stmt->bindParam(':Id', $Id);
            $stmt->execute();
            echo "Record Deleted";
        }
    }
}

$obj = new Question();
if(isset($_POST['insertbtn'])){
    $obj->Insert($_POST["Question_Insert"],$_POST["correctAns_Insert"],$_POST["wrongAns_Insert"]);
}
else if(isset($_POST['updatebtn'])){
    $obj->Update($_POST["Id_update"],$_POST["Question_Insert"],$_POST["correctAns_Insert"],$_POST["wrongAns_Insert"]);
}
else if(isset($_POST['Select_Deletebtn'])){
    $obj->Delete($_POST["Select_DeleteId"]);
}

?>