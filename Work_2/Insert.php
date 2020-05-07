<?php
    include "db.php";
    include "Model.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post">
        <div>
            Firstname - <input type="text" name="firstname">
        </div>
        <div>
            Lastname - <input type="text" name="lastname">
        </div>
        <div>
            Email - <input type="text" name="email">
        </div>
        <div>
            <input type="button" name="Insert" value="Insert">
        </div>
    </form>
    <?php
        try {
                if(isset($_POST['Insert'])){
                    $my_guests = new My_guests($_POST['firstname'],$_POST['lastname'],$_POST['email']);
                    $my_guests->insert();
                }
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
?>
</body>
</html>