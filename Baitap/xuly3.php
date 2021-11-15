<?php
    if(!empty($_POST)){
        $fullname=$_POST['fullname'];
        $gerder= $_POST['gerder'];
    }
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="200px" border="1">
        <tr>
            <td> Name</td>
            <td>:<?= $_POST["fullname"] ?> </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:<?=$_POST["gerder"] ?></td>
        </tr>
    </table>
</body>
</html>