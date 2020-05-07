<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>Insert</title>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: '../PHP/BusinessLogic.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    action: "insert",
                    name: name,
                    },
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



            $("#Insert").click(function(){
            var Id= $("#Id").val();

            var submit = $("#Insert").val();
            $.ajax({
                url: "../PHP/BusinessLogic.php",
                type: "post",
                data: {
                    action: "Delete",
                    Id: Id,
                },
            success:function(result) {
                alert(result)
            }
 
            
            })
     })
     $("#form")[0].reset();
        })
    </script>
</head>
<body>

    <form action="" method="post">
        <div class="container">
          <h3>Delete Product</h3>
          <span><b>Id</b></span>
          <input type="number" placeholder="Enter Id" name="ProductName" id="Id">
          <br>
          <br>
          <input type='submit' name='submit' id="Delete" value='submit'/>
        </div>
      </form>

    <div class="Table">
          <table style='border: solid 1px black;' id="Table">
          <tr>
              <th>Id</th>
              <th>ProductName</th>
              <th>Quantity</th>
              <th>MakeDate</th>
              <th>Code</th>
              <th>ShelfLife</th>
              <th>DbDate</th>
            </tr>
          </table>
      </div>
    
</body>
</html>