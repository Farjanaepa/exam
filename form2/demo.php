<?php
session_start();

if(!isset($_SESSION["sname"])){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<center>
    
    <form action="#" method="post" >

    <div>
        ID <br/>
        <input type="text" name="txtId" />
    </div>

    <div>
        Name <br/>
        <input type="text" name="txtId" />
    </div>
    <div>
        Email <br/>
        <input type="text" name="email" />
    </div>

    <div>
        Phone <br/>
        <input type="text" name="txtPhone" />
    </div>

    <div>
        
        <input type="submit" name="btnSubmit" value="submit"/>
        <a href="logout.php"><input type="button" name="btnSubmit" value="logout"/>
        </a>

    </div>





    </form>
    </center>
</body>
</html>