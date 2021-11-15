<?php
$username = "root"; 
$password = "Phanquang";
$server   = "localhost";
$dbname   = "QLSV";

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
?>