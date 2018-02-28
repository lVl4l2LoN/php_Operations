<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php include("search.php");?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Insert Update Delete Search</title>
    </head>
    <body>
        
        <form  method = "post" action = "">
            
            <input type ="number" name ="id" placeholder="Id" value= "<?php echo $id;?>" ><br><br>
            <input type ="text" name ="fname" placeholder="First Name" value="<?php echo $fname;?>"><br><br>
            <input type ="text" name ="lname" placeholder="Last Name" value="<?php echo $lname;?>"><br><br>
            <input type ="number" name ="age" placeholder="Age" value= "<?php echo $age;?>" ><br><br>
        </form>
        <div>
            <input type="submit" name="insert" value="Add">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="search" value="Find">
        </div>
    </body>
</html>


