<?php
    if(!empty($_POST)){
        $str=$_POST['so1'];

    }
        
    function dao_chuoi($str){
        $str= explode("",$str);
        echo $str;
        }
        echo "chuỗi đã đảo :" .$str;
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
<form name="nhap" action="" method="POST">
    <table>

    <tr> <td> chuỗi cần đảo :</td><td><input type="text" name="so1"></td></tr>


    <button>Đảo</button>
   
<br>
</body>
</html>