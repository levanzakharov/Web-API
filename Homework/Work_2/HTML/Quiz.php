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
$Questions = $Quiz->SelectQuestions();


$_SESSION["TestStart"] = date('Y-m-d H:i:s');
$_SESSION["Questions"] = $Questions;

for ($i=0; $i < 5; $i++) { 
    echo "<span>".array_values($Questions)[$i][0]."</span><br>";
    $Row = $Quiz->Select($Questions[$i][0]);

    if (random_int(1, 10)%2==0) {
        echo "<input type='radio' value='".$Questions[$i]["CorrectAns"]."' name='q".$i."' checked>";
        echo "<span>".$Questions[$i]["CorrectAns"]."</span><br>";
        echo "<br>";

        echo "<input type='radio' value='".$Questions[$i]["WrongAns"]."' name='q".$i."'>";
        echo "<span>".$Questions[$i]["WrongAns"]."</span><br>";
        echo "<br>";
    }
    else{
        echo "<input type='radio' value='".$Questions[$i]["WrongAns"]."' name='q".$i."' checked>";
        echo "<span>".$Questions[$i]["WrongAns"]."</span><br>";
        echo "<br>";

        echo "<input type='radio' value='".$Questions[$i]["CorrectAns"]."' name='q".$i."'>";
        echo "<span>".$Questions[$i]["CorrectAns"]."</span><br>";
        echo "<br>";
    }

    
}
echo "<input type='submit' name='submit' value='submit'/>";

?>
</form>

</body>
</html>