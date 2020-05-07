<?php
include "DB.php";
include "Check.php";


class Autorization{
    public $conn;
    public $check;

    function __construct(){
        $db = new Db();
        $this->conn = $db->connection(); 
        $this->check = new check();
        }

    function checkUsernameAndPassword($UserName, $Password){
        $data = $this->checkIfUsernameExist($UserName);
        if (!is_null($data)) {
            $data = json_decode($data);
            $password = $this->check->HashString($Password,$data[0]->Count);
            $password = $password[0];
            
            $stmt = $this->conn->prepare("SELECT `Id`, `UserName`, `Passwordi` FROM `user` WHERE UserName=:UserName, passwordi'=:Passwordi");
            $stmt->bindParam(':UserName', $UserName);
            $stmt->bindParam(':Passwordi', $password);
            $stmt->execute();
            $data = $stmt->fetchAll();

            if(mysqli_num_rows($stmt)>=1){
                header('Location: ../HTML/AdminPanel.php');
            }
            else{
                echo "Your Username or Password is incorrect";
            }
        } 
        else {
            echo "Your Username or Password is incorrect";
        }
    }

    function checkIfUsernameExist($UserName){
        $stmt = $this->conn->prepare("SELECT `UserName`, `Count` FROM `user` WHERE UserName=:UserName");
        $stmt->bindParam(':UserName', $UserName);
        $stmt->execute();
        $data = $stmt->fetchAll();
         
        return json_encode($data);
        // if(mysqli_num_rows($stmt)>=1){
        //     $data = $stmt->fetchAll();
        //     return $data;
        // }
        // else
        // {
        //     return null;
        // } 
    }
}

$Autorization = new Autorization();
if(isset($_POST['submit'])){
    $Autorization->checkUsernameAndPassword($_POST["Username"],$_POST["Password"]);
}
?>