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
    const host ="localhost";
    const userName ='root';
    const password ='Phanquang';
    const dbname ="QLBanHang";
    // $svevername ='localhost';
    // $username ='root';
    // $passwpord ='Phanquang';
    //tao ket noi
    $conn = new mysqli(host, userName,password,dbname);
    // kiem tra ket noi
    if($conn->connect_error){
        die('ket noi khoong thanh cong'.$conn->connect_error);
    }
    else{
        echo'ket noi thành công ';
    }

    // tao co so du lieu 
    // $sql  ="CREATE DATABASE QLBanHang";
    // if($conn->query($sql)=== true){
    //     echo"tao co so du lieu thanh cong ";

    // }
    // else{
    //     echo" co loi khi tao co so du lieu " .$conn->error;
    // }
    $conn->close();

     ?>
</body>
</html>