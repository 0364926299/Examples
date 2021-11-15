

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="nhap" action="ketqua.php" method="POST">
    <table width="200px" border="1">

    <tr> <td> số thứ nhất:</td><td><input type="text" name="so1"></td></tr>

    <tr> <td> số thứ hai:</td><td><input name="so2" type="text" ></td> </tr>
    <br>
    chon phép toán  
     <select  name="math">
         <option value="+">cong</option>
         <option value="-">tru</option>
         <option value="*">nhan</option>
         <option value="/">chia</option>
     </select>
     

<tr><td><button type="submit">tinh</button></td></tr>
<br>
</body>
</html>