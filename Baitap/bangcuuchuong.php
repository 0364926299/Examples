<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;

        }
        body {
            
            display: flex;
            justify-content: center;
        }
        body h3 {
`           margin-top: 20px;

        }
    </style>
</head>
<body>
    <h3> Bảng cửu chương</h3>
    <table border="1px">
        <thead>
        <tr>
            
            
            <?php  for( $i=1; $i<=10 ; $i++){?>
                <td>  Bảng <?php echo"" .$i   ?></td> 
                <?php } ?>
        </tr>

        </thead>

        <tbody>
        <?php  for( $i=1; $i<=10 ; $i++){?>
            <tr>
                
            <?php for($j=1;$j<=10;$j++){ ?>
                  <td>  <?php  echo" $i *$j =" .$i*$j ?></td> 
                
             <?php } ?>
            </tr>
         <?php } ?>
        </tbody>
    </table>
</body>
</html>