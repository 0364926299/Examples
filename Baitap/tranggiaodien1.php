Trang giaodien1.php
<html>
<body>



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
     color: rebeccapurple;
     background-color: rgb(204,204,204);
    display: flex;
    justify-content: center;
        }
    </style>

<form action="xuly1.php" method="get">
<tr><td>Province</td>
<td>
:<select name=province>
<option value=HAN>Ha Noi</option>
<option value=HCM>Ho Chi Minh</option>
<option value=HUE>Hue</option>
</select>
</td></tr>
<tr><td>Industry</td>
<td>
:<select name=industry multiple>
<option value=AUT>Automobile</option>
<option value=FOO>Foods</option>
<option value=ENG>Enginering</option>
<option value=GAR>Garment</option>
</select>
</td></tr>
<tr><td>&nbsp</td>
<td><input type=submit value=Submit></td></tr>
</form>
</body>
</html>