<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_api";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $stmt = $conn->prepare("SELECT * FROM my_guests WHERE lastname Like concat('%', concat(:search, '%'))");
    $stmt->bindParam(':search', $_GET["search"]);
    $stmt->execute();

    $result = $stmt->fetchAll();
    echo json_encode($result);


?>