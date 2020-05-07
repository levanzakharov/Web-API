<?php 
include "../PHP/quiz.php";

$quiz = new Quiz();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <form action="../PHP/quiz.php" method="post">
    <span>Please Enter Your Name</span><br>
    <input type="text" name="playerName" value ="" required>
    <br>

    <input style='border:none' type='text' id='Score' value='point: 0' readonly>
    <br>
    
    <?php
        $array = json_decode($quiz->select());
        for ($i=0; $i < 10; $i++) { 
            echo "<input style='border:none' type='text' name='Question".$i."' value='".$array[$i]->Question."' readonly><br>";
            $rand = random_int(0,1);
            if ($rand==0) { 
                echo "<input type='radio' value='".$array[$i]->CorrectAns."' name='Ans".$i."'>";
                echo "<span>".$array[$i]->CorrectAns."</span><br>";
                
                echo "<input type='radio' value='".$array[$i]->WrongAns."' name='Ans".$i."'>";
                echo "<span>".$array[$i]->WrongAns."</span><br>";
            } else {
                echo "<input type='radio' value='".$array[$i]->WrongAns."' name='Ans".$i."'>";
                echo "<span>".$array[$i]->WrongAns."</span><br>";
                
                echo "<input type='radio' value='".$array[$i]->CorrectAns."' name='Ans".$i."'>";
                echo "<span>".$array[$i]->CorrectAns."</span><br>";
            }
            echo "<br>";
        }
        echo "<br>";
        echo "<input type='submit' name='submit' value='submit'/>";
    ?>

</form>
</body>
</html>