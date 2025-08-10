<?php
require 'tab.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Transaction PDO</title>
</head>
<body>
    <div class="all">
        <form method="POST" action="insert.php">
        <div class="one">
            <h3>Author Info:</h3>
            <label>First Name :</label> <br><br>
            <input type="text" required name="fName"><br><br>
            <label>Last Name :</label> <br><br>
            <input type="text" required name="lName"><br><br>
            <img src="https://i.pinimg.com/736x/58/35/5d/58355dbbc3a0200716cb3381f9e04290.jpg">
        </div>
        <div class="two">
            <h3>Book Info:</h3>
            <label>Title :</label> <br><br>
            <input type="text" required name="title"><br><br>
            <label>ISBN :</label> <br><br>
            <input type="text" required name="isbn"><br><br>
            <label>Published Date :</label> <br><br>
            <input type="date" required name="PD"><br><br>
            <label>Publisher ID :</label> <br><br>
            <input type="number" required name="PID"><br><br>
            <input type="submit" value ="ADD" class="btn">
        </div>
        
    </form>
    </div>
</body>
</html>