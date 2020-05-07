<?php
class My_guests{
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $conn;

    function connection(){
        $db = new Db();
        $conn = $db->connection();
    }

    function __construct($firstname,$lastname,$email,$id = 0){
        $this->firstname= $firstname;
        $this->lastname= $lastname;
        $this->email= $email;
        $this->id= $id;
    }

    function insert(){
        $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)VALUES (:firstname, :lastname, :email)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        echo "New records created successfully";
    }
}


?>