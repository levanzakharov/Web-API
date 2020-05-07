<?php
include "../PHP/BusinessLogic.php";
  $BL = new BusinessLogic;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>Select</title>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: '../PHP/BusinessLogic.php',
                type: 'POST',
                dataType: 'json',
                data: { SelectData: "success"},
                success: function(response) { 
                    data = Jsone_decode(response)
                    for (var i=0; i<data.length; i++) {
                        var row = $('<tr><td>' + data[i].Id+ '</td><td>' 
                        + data[i].ProductName + '</td><td>' + 
                        + data[i].Quantity + '</td><td>' + 
                        + data[i].MakeDate + '</td><td>' + 
                        + data[i].Code + '</td><td>' + 
                        + data[i].ShelfLife + '</td><td>' + 
                        data[i].DbDate + '</td></tr>');
                        $('#Table').append(row);
                        }
                    

                    }
                });


            
        })
    </script>
</head>
<body>

    <select name="select" id="select">
        <option value="Id">Id</option>
        <option value="ProductName">ProductName</option>
        <option value="Quantity">Quantity</option>
        <option value="MakeDate">MakeDate</option>
        <option value="Code">Code</option>
        <option value="ShelfLife">ShelfLife</option>
        <option value="DbDate">DbDate</option>
    </select>

    <br>
    <br>
    <br>

    <div class="Table">
          <table style='border: solid 1px black;'>
          <tr>
                <th>Id</th>
              <th>ProductName</th>
              <th>Quantity</th>
              <th>MakeDate</th>
              <th>Code</th>
              <th>ShelfLife</th>
              <th>DbDate</th>
            </tr>
    
            <?php
              $rows = $BL->SelectData();
              foreach($rows as $row) {
                echo "<tr>";
                echo "<td>".$row['Id']."</td>";
                echo "<td>".$row['ProductName']."</td>";
                echo "<td>".$row['Quantity']."</td>";
                echo "<td>".$row['MakeDate']."</td>";
                echo "<td>".$row['Code']."</td>";
                echo "<td>".$row['ShelfLife']."</td>";
                echo "<td>".$row['DbDate']."</td>";
                echo "</tr>";
              }
            ?>
          </table>
      </div>
    
</body>
</html>

