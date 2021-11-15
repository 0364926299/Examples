<?php
    if(!empty($_POST)){
        $user =$_POST['user'];
        $password =$_POST['password'];
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

    <h4> From validate123</h4>
    <span> USername : <?= !empty($user)?$user:''?></span> <br>
    <span> password : <?=!empty($password)?$password:''?> </span>
</body>
</html>