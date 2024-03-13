
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <center>
<form action="#" method="post">
    <input type="text" name="txtUsername"><br><br>
    <input type="number" name="txtpassword"><br><br>
    <input type="submit" name="submit" value="login">

</form>
</center>   
</body>
</html>


<?php
session_start();

if(isset($_POST["submit"])){
    $username = $_POST["txtUsername"];
    $password = $_POST["txtpassword"];
   
    if($username=="admin" && $password=="1234"){
        $_SESSION["sname"] = $password;
        header("location:demo.php");
    }
    else{
        $msg = "username or password is incorrect";
    }

}

?>

<?php
echo isset($msg)?$msg:"";

?>
