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
$ma = $_POST["txt_ma"];
$ten= $_POST["txt_ten"];
$sql= "UPDATE tblships SET Name ='$ten' WHERE ID = '$ma' ";
$query = mysqli_query($link,$sql);
header("location: lietke.php");
?>
</body>
</html>