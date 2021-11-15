
<?php
    if(!empty($_POST)){
        $so1=$_POST['so1'];
        $so2= $_POST['so2'];
        $math= $_POST["math"];
        switch($math){
            case'+';
            $result= $so1+$so2;
            break;

            case'-';
            $result = $so1-$so2;
            break;
            case'*';
            $result = $so1*$so2;
            break;
            case'/';
            $result =$so1 /$so2;
            break;

        }
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
            <td> so thu nhat </td>
            <td>:<?= $_POST["so1"] ?> </td>
        </tr>
        <tr>
            <td>so thu 2</td>
            <td>:<?=$_POST["so2"] ?></td>
        </tr>
        <tr>
            <td>ketqua</td>
            <td>:<?=$result ?></td>
        </tr>
        
    </table>
</body>
</html>