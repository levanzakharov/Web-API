<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include '../PHP/Quiz.php';
        $Quiz = new Quiz();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Css/Quiz.css">
    <title>Quiz</title>
</head>
<body>

<form action="../PHP/Quiz.php" method="post">
<?php
$EnglishArray = $Quiz->SelectEnglishWords();


$_SESSION["TestStart"] = date('Y-m-d H:i:s');
$_SESSION["EnglishArraysession"] = $EnglishArray;

for ($i=0; $i < 5; $i++) { 
    echo "<span>".array_values($EnglishArray)[$i][0]."</span><br>";
    $Row = $Quiz->Select($EnglishArray[$i][0]);
    $GeorgianArray = $Quiz->SelectGeorgianWords($Row[0]["Georgian"]);
    array_push($GeorgianArray,$Row[0]);
    for ($j=0; $j < 4; $j++) { 
        echo "<input type='radio' value='".$GeorgianArray[$j]["Georgian"]."' name='word".$i."' checked>";
        echo "<span>".$GeorgianArray[$j]["Georgian"]."</span><br>";
    }
    echo "<br>";
}
echo "<input type='submit' name='submit' value='submit'/>";

?>
</form>

</body>
</html>