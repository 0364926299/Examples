<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px"  style="border-collapse: collapse;">

    
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Sách</th>
                <th>Tác giả</th>
            </tr>

            <style>
        table tr td {
      width: 360px;
    min-height: 100px;
    padding: 10px 10px;
    text-align: center;   
    background-color:#ffffff;   
    border-radius: 2px;
    align-self: center;
    box-shadow: 0 2px 5px 0 rgba(51,62,73,.1);

        } 
        *{
            margin: 0;
    padding: 0;
            
        }
        body{
     padding: 20px;
     background-color: rgb(204,204,204);
    display: flex;
    justify-content: center;
        }
    </style>
        </thead>
        <tbody>
            <?php 
                for($i=1;$i<=10;$i++) {
                    echo "
                        <tr>
                            <td>$i</td>
                            <td>Tên sách $i</td>
                            <td>Tác giả $i</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>