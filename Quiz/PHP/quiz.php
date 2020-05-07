<?php
include "Db.php";

class Quiz{
    public $connect;
    public $Mtvleli = 0;

    function __construct(){
        $Dab = new Db();
        $this->connect = $Dab->connect();

    }

    public function Select()
    {
        $stmt = $this->connect->prepare("SELECT `Id`, `Question`, `CorrectAns`, `WrongAns` FROM `kitxvebi` ORDER By RAND() Limit 10");
        $stmt->execute();
        $data = $stmt->fetchAll();
        return json_encode($data);
    }

    public function check($Question, $ans){
        $stmt = $this->connect->prepare("SELECT `Id`, `Question`, `CorrectAns`, `WrongAns` FROM `kitxvebi` where Question=:Question, CorrectAns=:ans");
        $stmt->bindParam(':Question', $Question);
        $stmt->bindParam(':ans', $ans);
        $stmt->execute();
        $data = $stmt->fetchAll();

        if (mysqli_num_rows($data)!=0) {
            return true;
        } else {
            return false;
        }
    }

    public function ScoreMtvleli($Question, $ans){
        if ($this->check($Question, $ans)) {
            $this->Mtvleli+=2;
        }
    }

    public function SaveUser($user, $score){
        if ($score>9) {
            $stmt = $this->connect->prepare("INSERT INTO `user`(`User`, `Score`) VALUES (:user,:score)");
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':score', $score);
            $stmt->execute();
        echo "Added Succesful";
        }
        else {
            //header("Location: http://localhost/Quiz/HTML/Index.php");
        }
    }
}

$quiz = new Quiz();

if (isset($_POST['Ans0'])){
    $quiz->ScoreMtvleli($_POST['Question0'],$_POST['Ans0']);
}
else if (isset($_POST['Ans1'])){
    $quiz->ScoreMtvleli($_POST['Question1'],$_POST['Ans1']);
}
else if (isset($_POST['Ans2'])){
    $quiz->ScoreMtvleli($_POST['Question2'],$_POST['Ans2']);
}
else if (isset($_POST['Ans3'])){
    $quiz->ScoreMtvleli($_POST['Question3'],$_POST['Ans3']);
}
else if (isset($_POST['Ans4'])){
    $quiz->ScoreMtvleli($_POST['Question4'],$_POST['Ans4']);
}
else if (isset($_POST['Ans5'])){
    $quiz->ScoreMtvleli($_POST['Question5'],$_POST['Ans5']);
}
else if (isset($_POST['Ans6'])){
    $quiz->ScoreMtvleli($_POST['Question6'],$_POST['Ans6']);
}
else if (isset($_POST['Ans7'])){
    $quiz->ScoreMtvleli($_POST['Question7'],$_POST['Ans7']);
}
else if (isset($_POST['Ans8'])){
    $quiz->ScoreMtvleli($_POST['Question8'],$_POST['Ans8']);
}
else if (isset($_POST['Ans9'])){
    $quiz->ScoreMtvleli($_POST['Question9'],$_POST['Ans9']);
}
else if (isset($_POST['submit'])){
    $quiz->SaveUser($_POST['playerName'],$quiz->Mtvleli);
}

?>