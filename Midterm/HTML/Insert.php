<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
 
    <title>Insert</title>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: '../PHP/BusinessLogic.php',
                type: 'POST',
                dataType: 'json',
                data: { SelectData: "success"},
                success: function(response) { 
                    console.log(response); 
                    }
                });



            $("#Insert").click(function(){
            var ProductName= $("#ProductName").val();
            var MakeDate= $("#MakeDate").val();

            var submit = $("#Insert").val();
            $.ajax({
                url: "../PHP/BusinessLogic.php",
                type: "post",
                data: {
                    action: "Insert",
                    ProductName: ProductName,
                    MakeDate: MakeDate,
                },
            success:function(result) {
                alert(result)
            }

            
            })
            })
        })
    </script>
</head>
<body>

    <form action="" method="post">
      <div class="container">
        <h3>Add New Product</h3>
        <span><b>ProductName</b></span>
        <input type="text" placeholder="Enter ProductName" name="ProductName" id="ProductName">
        <br>
        <br>
        <span><b>MakeDate</b></span>
        <input type="date" placeholder="Enter MakeDate" name="MakeDate" id="MakeDate">
        <br>
        <br>
        <input type='submit' name='submit' id="Insert" value='submit'/>
      </div>
    </form>

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
          </table>
      </div>
    
</body>
</html>