<?php
include "DB.php";
include "Check.php";

class Dictionary{
    public $conn;
    public $check;

    function __construct(){
        $db = new Db();
        $this->conn = $db->connection(); 
        $this->check = new check();
        }

    function SelectAll(){
        $stmt = $this->conn->prepare("SELECT * FROM dictionary");
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    function Select($English){
        $stmt = $this->conn->prepare("SELECT `Id`, `English`, `Georgian` FROM `dictionary` WHERE English=:English");
            $stmt->bindParam(':English', $English);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
    }

    function Insert($English,$Georgian){
        if ($this->check->checkSpecialCharacters($English) && $this->check->checkSpecialCharacters($Georgian))
            {
                if ($this->check->checkLength($English) && $this->check->checkLength($Georgian))
                {
                    //if ($this->check->CheckLanguage($English,"English") && $this->check->CheckLanguage($Georgian,"Georgian"))
                    //{
                        $stmt = $this->conn->prepare("INSERT INTO `dictionary`(`English`, `Georgian`) VALUES (:English,:Georgian)");
                        $stmt->bindParam(':English', $English);
                        $stmt->bindParam(':Georgian', $Georgian);
                        $stmt->execute();
                        echo "New Record Added";
                    //}
                }
            }
    }

    function Update($English,$Georgian,$Id){
        if ($this->check->checkSpecialCharacters($English) && $this->check->checkSpecialCharacters($Georgian))
            {
                if ($this->check->checkLength($English) && $this->check->checkLength($Georgian))
                {
                    //if ($this->check->CheckLanguage($English,"English") && $this->check->CheckLanguage($Georgian,"Georgian"))
                    //{
                        $stmt = $this->conn->prepare("UPDATE `dictionary` SET English=:English, Georgian=
                        :Georgian WHERE Id = :Id");
                        $stmt->bindParam(':English', $English);
                        $stmt->bindParam(':Georgian', $Georgian);
                        $stmt->bindParam(':Id', $Id);
                        $stmt->execute();
                        echo "Record updated";
                    //}
                }
            }       
    }

    function Delete($Id){
        if ($this->check->checkId($Id))
        {
            $stmt = $this->conn->prepare("DELETE FROM `dictionary` WHERE Id=:Id");
            $stmt->bindParam(':Id', $Id);
            $stmt->execute();
            echo "Record Deleted";
        }
    }
}

$Dict = new Dictionary();
if(isset($_POST['insertbtn'])){
    $Dict->Insert($_POST["English_Insert"],$_POST["Georgian_Insert"]);
}
else if(isset($_POST['updatebtn'])){
    $Dict->Update($_POST["English_update"],$_POST["Georgian_update"],$_POST["Id_update"]);
}
else if(isset($_POST['Select_Deletebtn'])){
    $Dict->Delete($_POST["Select_DeleteId"]);
}

?>