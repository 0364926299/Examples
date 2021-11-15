<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("connection.php");
$ma = $_POST["txtID"];
$ten= $_POST["txtName"];
$sql= "INSERT INTO tblships VALUES('$ma', '$ten')";
$query = mysqli_query($link,$sql);
?>
</body>
</html>