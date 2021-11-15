<?php
    if(!empty($_POST)){
        $a=$_POST['so1'];
        $b= $_POST['so2'];
    }
        
    function ucln($a, $b) {
        if($a == 0 || $b ==0 ){
            return $a + $b;
        }
        while($a != $b) {
              if($a > $b) {
                $a -=$b;
            } else {
              $b -=$a;
            }   
        }
        return $a;
    };
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

    <tr> <td> số thứ nhất:</td><td><input type="text" name="so1"></td></tr>

    <tr> <td> số thứ hai:</td><td><input name="so2" type="text" ></td> </tr>

    <button>Tìm</button>
   
    <?php
        echo "UCLN: ". ucln($_POST["so1"], $_POST["so2"]);
    ?>
<br>
</body>
</html>