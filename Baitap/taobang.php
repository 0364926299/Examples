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

    include("mqlketnoi.php");
    // const host ="localhost";
    // const userName ='root';
    // const password ='Phanquang';
     const dbname ="QLBanHang";
    // // $svevername ='localhost';
    // // $username ='root';
    // // $passwpord ='Phanquang';
    // //tao ket noi
     $conn = new mysqli(host, userName,password, dbname );
    // // kiem tra ket noi
    // if($conn->connect_error){
    //     die('ket noi khoong thanh cong' .$conn->connect_error);
    // }

    // tạo cấu trúc bảng 
    // $sql =" CREATE TABLE SanPham ( Ma VARCHAR (10) PRIMARY KEY, Ten VARCHAR(50) NOT NULL , DonViTinh VARCHAR(10), DonGia INT )";

    //$sql= "ALTER TABLE SanPham  modify DonGia DECIMAL";
    
    $sql ="INSERT INTO SanPham (`Ma`, `Ten`, `DonViTinh`, `DonGia`) VALUES ('TS04', 'áo TS 2', 'VND', '1000005') ,('TS05', 'áo PR2', 'VND', '1100005'),('TS06', 'áo ba lỗ2', 'VND', '1200005')" ;
    if($conn->query($sql)=== TRUE){
        echo ' SUA dữ liệu thành công ';
    }
    else {
        
            echo' Có lỗi khi tạo bảng' .$conn->error;
        }
    

    $conn->close();

     ?>
</body>
</html>