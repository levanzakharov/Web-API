<?php
include "db.php";

try {
    $sql = "DELETE FROM MyGuests WHERE id=1";
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>