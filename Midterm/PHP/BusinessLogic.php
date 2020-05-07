<?php
include "Db.php";
include "HelpMethods.php";

class BusinessLogic{
    public $conn;
    public $helpMethods;

    function __construct(){
        $db = new Db();
        $this->helpMethods = new HelpMethods();
        $this->conn = $db->connection(); 
        }



  

    function SelectData(){
        $stmt = $this->conn->prepare("SELECT * FROM `product`");
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

    function SortByColumn(){
        $stmt = $this->conn->prepare("SELECT * FROM `product` ORDER BY :column ASC");
        $stmt->bindParam(':column', $_POST['column1']);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

    function InsertData(){
        $Quantity = rand(1,100);
        $Code = $this->helpMethods->randomCode();
        $ShelfLife = rand(10,30);

        $stmt = $this->conn->prepare("INSERT INTO `product`(`ProductName`, `Quantity`, `MakeDate`, `Code`, `ShelfLife`) VALUES (:ProductName,:Quantity,:MakeDate,:Code,:ShelfLife)");
        $stmt->bindParam(':ProductName', $_POST['ProductName']);
        $stmt->bindParam(':Quantity', $Quantity);
        $stmt->bindParam(':MakeDate', $_POST['MakeDate']);
        $stmt->bindParam(':Code', $Code);
        $stmt->bindParam(':ShelfLife', $ShelfLife);
        $stmt->execute();

        if ($stmt->execute()){
            echo "Succesful";
        }
        else{
            echo "Failure";
        }
    }


    function UpdateData(){
        $stmt = $this->conn->prepare("INSERT INTO `product`(`ProductName`, `Quantity`, `MakeDate`, `Code`, `ShelfLife`) VALUES (:ProductName,:Quantity,:MakeDate,:Code,:ShelfLife)");
        $stmt->bindParam(':ProductName', $_POST['ProductName']);
        $stmt->bindParam(':Quantity', $_POST['Quantity']);
        $stmt->bindParam(':MakeDate', $_POST['MakeDate']);
        $stmt->bindParam(':Code', $_POST['Code']);
        $stmt->bindParam(':ShelfLife', $_POST['ShelfLife']);
        $stmt->execute();

        if ($stmt->execute()){
            echo "Succesful";
        }
        else{
            echo "Failure";
        }
    }


    function DeleteData(){
        $stmt = $this->conn->prepare("DELETE FROM `products` WHERE `id`=:id");
        $stmt->bindParam(':Id', $_POST['Id']);
        $stmt->execute();

        if ($stmt->execute()){
            echo "Succesful";
        }
        else{
            echo "Failure";
        }
    }


}
$obj = new BusinessLogic;
if (isset($_POST['Select'])){
    $obj->SelectData();
}

if (isset($_POST['Insert'])){
    $obj->InsertData();
}

if (isset($_POST['Delete'])){
    $obj->InsertData();
}

if (isset($_POST['Insert'])){
    $obj->UpdateData();
}

?>