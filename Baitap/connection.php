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

        $link = mysqli_connection('localhost:81', 'root', 'Phanquang','/');

     if (!$link){
         
         echo "error  MySQL";

         }
    $db = mysql_select_db("InterShop");
    if(!$db)
{
echo " error  DB";
}
?> 


</body>
</html>