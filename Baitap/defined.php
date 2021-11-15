<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> constant</h4>
    <?php
    define("pi",3.14);

    // define( "hrs",8);
    function test(){
        if(defined("pi"))
        echo"<br> pi :=" .pi;
        else
        echo"<br> pi not  definded";
        if(defined("hrs"))
        echo" <br> hrs:=" .hrs ;
        else
        echo" <br> hrs not defined";
    }
    test();
    ?>
</body>
</html>