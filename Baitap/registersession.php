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
    <?php 
        $userId = "123";
        $email = "test@yahoo.com";
        $fullname = "Nguyen Van Ba";
        

        $_SESSION['userId'] = $userId;
        $_SESSION['email'] = $email;
        $_SESSION['fullname'] = $fullname;
    
        // session_register();
        // session_register("email","fullname");
    ?>
</body>
</html>