<?php 
    session_start();
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
    <h4>GET SESSION</h4>
    <?php 
        if(!empty($_SESSION)) {
            echo "UserID: ".$_SESSION['userId']."<br>";
            echo "Email: ".$_SESSION['email']."<br>";
            echo "Fullname: ".$_SESSION['fullname']."<br>";
        } else {
            echo "Vui lòng nhập lại thông tin";
        }
    ?>
</body>
</html>