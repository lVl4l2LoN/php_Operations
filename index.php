<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Insert Update Delete Search</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form action = "index.php" method = "post">
            <input type ="number" name ="id" placeholder="Id"><br><br>
            <input type ="text" name ="fname" placeholder="First Name"><br><br>
            <input type ="text" name ="lname" placeholder="Last Name"><br><br>
            <input type ="number" name ="age" placeholder="Age"><br><br>
        </form>
        <div>
            <input type="submit" name="insert" value="Add">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="search" value="Find">
        </div>
    </body>
</html>
