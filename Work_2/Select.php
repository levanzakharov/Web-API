<?php
include "db.php";

try {
    $sql = "SELECT * FROM my_guests";
    echo $conn->exec($sql);
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>