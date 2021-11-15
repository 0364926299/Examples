<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr ,td, th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th> Mã </th>
                <th>Tên</th>
                <th>Đơn vị tính</th>
                <th>Đơn Giá </th>
                
            </tr>
            <?php
                include("mqlketnoi.php");
               
                $conn = new mysqli(host,userName,password,dbname );
                $sql = "select *from SanPham";
                $result =$conn->query($sql);

                while($row =$result->fetch_assoc()){
                    echo"<pre>";
                    print_r($row);
                    echo"
                       <tr>
                       
                       <td>".$row['Ma']."</td>
                       <td>".$row['Ten']."</td>
                       <td>".$row['DonViTinh']."</td>
                       <td>".$row['DonGia']."</td>
                       
                       </tr>
                       ";
                }
             ?>
        </table>

    </div>
</body>
</html>