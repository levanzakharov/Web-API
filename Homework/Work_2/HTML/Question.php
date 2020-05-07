<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
      include '../PHP/Question.php';
      $Dict = new Question();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Css/Question.css">
    <title>Dictionary</title>

    <script>
      function genderSelectHandler(){    
        $Select_Choice = document.getElementById("Select_Choice");
        $Select_Delete = document.getElementById('Select_Delete');
        $Insert = document.getElementById('Insertdiv');
        $Update = document.getElementById('Updatediv');
        if($Select_Choice.value == 'Select' || $Select_Choice.value == 'Delete'){
          $Select_Delete.style.visibility = 'visible';
          $Insert.style.visibility = 'hidden';
          $Update.style.visibility = 'hidden';
        }
        else if($Select_Choice.value == 'Insert'){
          $Select_Delete.style.visibility = 'hidden';
          $Insert.style.visibility = 'visible';
          $Update.style.visibility = 'hidden';
        }
        else{
          $Select_Delete.style.visibility = 'hidden';
          $Insert.style.visibility = 'hidden';
          $Update.style.visibility = 'visible';
        }
      }
    </script>
</head>
<body>
<form action="../PHP/Question.php" method="post">
  <div class="container">
    <select id="Select_Choice" onchange="genderSelectHandler()">
      <option value="Select">Select</option>
      <option value="Insert">Insert</option>
      <option value="Update">Update</option>
      <option value="Delete">Delete</option>
    </select>
    <br>
    <br>

    <div class="Select_Delete" id="Select_Delete">
      <label for="Id"><b>Id</b></label>
      <input type="number" placeholder="Enter Id" name="Select_DeleteId">
      <br>
      <br>
      <input type="submit" class="button" name="Select_Deletebtn" value="submit" />
    </div>

    <div class="Insert" id="Insertdiv">
      <label for="Question"><b>Question</b></label>
      <input type="text" placeholder="Enter Question" name="Question_Insert" id="Question_Insert">
      <br>
      <br>
      <label for="correctAns"><b>correctAns</b></label>
      <input type="text" placeholder="Enter correctAns" name="correctAns_Insert" id="correctAns_Insert">
      <br>
      <br>
      <label for="wrongAns"><b>wrongAns</b></label>
      <input type="text" placeholder="Enter wrongAns" name="wrongAns_Insert" id="wrongAns_Insert">
      <br>
      <br>
      <input type="submit" class="button" name="insertbtn" value="insert" />
    </div>

    <div class="update" id="Updatediv"> 
      <label for="Id"><b>Id</b></label>
      <input type="number" placeholder="Enter Id" name="Id_update">
      <br>
      <br>
      <label for="Question"><b>Question</b></label>
      <input type="text" placeholder="Enter Question" name="Question_update" id="Question_update">
      <br>
      <br>
      <label for="correctAns"><b>correctAns</b></label>
      <input type="text" placeholder="Enter correctAns" name="correctAns_update" id="correctAns_update">
      <br>
      <br>
      <label for="wrongAns"><b>wrongAns</b></label>
      <input type="text" placeholder="Enter wrongAns" name="wrongAns_update" id="wrongAns_update">
      <br>
      <br>
      <button type="submit" name="updatebtn" value="update" >submit</button>
    </div>
  </div>
    
  <br>
  <br>
  <div class="Table">
      <table style='border: solid 1px black;'>
      <tr>
          <th>Id</th>
          <th>Question</th>
          <th>CorrectAns</th>
          <th>WrongAns</th>
        </tr>

        <?php
          $rows = $Dict->SelectAll();
          foreach($rows as $row) {
            echo "<tr>";
            echo "<td>".$row['Id']."</td>";
            echo "<td>".$row['Question']."</td>";
            echo "<td>".$row['CorrectAns']."</td>";
            echo "<td>".$row['WrongAns']."</td>";
            echo "</tr>";
          }
        ?>
      </table>
  </div>

</form>
</body>
</html>