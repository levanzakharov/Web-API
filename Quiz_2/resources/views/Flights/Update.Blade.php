<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="links">
        <a href="/Quiz_2/public/Flights/Findpage">Find</a>
        <a href="/Quiz_2/public/Flights/insertpage">Insert</a>
        <a href="/Quiz_2/public/Flights/Updatepage">Update</a>
        <a href="/Quiz_2/public/Flights/Deletepage">Delete</a>
    </div>
    <br><br>
    <form action="/Quiz_2/public/Flights/Update">
        <label for="Id">Id:</label>
        <br>
        <input type="number" id="Id" name="Id">
        <br><br>

        <label for="identification">identification:</label>
        <br>
        <input type="text" id="identification" name="identification">
        <br><br>

        <label for="FromFlightName">From Flight Name:</label>
        <br>
        <input type="text" id="FromFlightName" name="FromFlightName">
        <br><br>

        <label for="ToFlightName">To Flight Name:</label>
        <br>
        <input type="text" id="ToFlightName" name="ToFlightName">
        <br><br>

        <label for="FromFlightDate">From Flight Date:</label>
        <br>
        <input type="datetime-local" id="FromFlightDate" name="FromFlightDate">
        <br><br>

        <label for="ToFlightDate">To Flight Date:</label>
        <br>
        <input type="datetime-local" id="ToFlightDate" name="ToFlightDate">
        <br><br>

        <input type="submit" name="submit">
      </form>
</body>
</html>
