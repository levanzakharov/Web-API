<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
      include '../PHP/Dictionary.php';
      $Dict = new Dictionary();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Css/Dictionary.css">
    <title>Dictionary</title>

    <script>
      function genderSelectHandler(){    
        $Select_Choice = document.getElementById("Select_Choice");
        $Select_Delete = document.getElementById('Select_Delete');
        $Insert = document.getElementById('Insertdiv');
        $Update = document.getElementById('Updatediv');
        if($Select_Choice.value == 'Select' || $Select_Choice.value == 'Delete'){
          console.log("fuytfuytfy");
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
<form action="../PHP/Dictionary.php" method="post">
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
      <label for="English"><b>English</b></label>
      <input type="text" placeholder="Enter English word" name="English_Insert" id="English_Insert">
      <br>
      <br>
      <label for="Georgian"><b>Georgian</b></label>
      <input type="Georgian" placeholder="Enter Georgian meaning" name="Georgian_Insert" id="Georgian_Insert">
      <br>
      <br>
      <input type="submit" class="button" name="insertbtn" value="insert" />
    </div>

    <div class="update" id="Updatediv"> 
      <label for="Id"><b>Id</b></label>
      <input type="number" placeholder="Enter Id" name="Id_update">
      <br>
      <br>
      <label for="English"><b>English</b></label>
      <input type="text" placeholder="Enter English word" name="English_update">
      <br>
      <br>
      <label for="Georgian"><b>Georgian</b></label>
      <input type="Georgian" placeholder="Enter Georgian meaning" name="Georgian_update">
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
          <th>English</th>
          <th>Georgian</th>
        </tr>

        <?php
          $rows = $Dict->SelectAll();
          foreach($rows as $row) {
            echo "<tr>";
            echo "<td>".$row['Id']."</td>";
            echo "<td>".$row['English']."</td>";
            echo "<td>".$row['Georgian']."</td>";
            echo "</tr>";
          }
        ?>
      </table>
  </div>

</form>
</body>
</html>