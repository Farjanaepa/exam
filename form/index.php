<?php

require_once("student_class.php");
if(isset($_POST["btnsubmit"])){
    $id=$_POST["txtid"];
    $name=$_POST["txtname"];

    $student=new student ($id,$name);
    $student->save();
    echo "success";
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
<fieldset style="width:40% ">
    <legend>Student Form</legend>
<form action="#" method="POST">

<label for="id"> id:</label>
<input type="text" name="txtid"> <br><br>

<label for="name">name:</label>
<input type="text" name="txtname"><br><br>

<input type="submit" name="btnsubmit" value="submit">
</form>
</fieldset>

<?php

student::display_students();


?>
    
</body>
</html>