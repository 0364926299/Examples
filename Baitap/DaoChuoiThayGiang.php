 
<html>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .box{
            line-height: 1.6rem;
            text-align: center;
            box-sizing: border-box;
            margin: 10 auto;
           width: 600px;
           border: 2px solid red;
           border-radius:5px;

        }
        .contenr{
            padding: 10px;
            background: yellow;
        }
        .post{
            padding: 15px;
            text-align: justify;
            background-color: blanchedalmond;
        }
        .input{
           height: 40px;
           margin: 10px;
        }
    </style>
    <body>
        <div  class="box">
            <div class="contenr">
                <h3> Thực hiện Đảo Chuỗi</h3>

            </div>
                     
            <div class="post">
            <?php
            function DaoChuoi($chuoi)
            {
                $m = explode(" ", $chuoi);
                $s = "";
                for ($i = count($m) - 1; $i >= 0; $i--)
                {
                    $s .= $m[$i] . " ";
                }
                $s = rtrim($s);
                return $s;
            }            
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nhập chuỗi</td>
                    <td><input type="text" id="input" name="Chuoi"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Đảo chuỗi"></td>
                </tr>                
            </table>
        </form>
        <?php
        if (isset($_POST["Chuoi"])) echo "Kết quả: " . DaoChuoi($_POST["Chuoi"]);
        ?>
            </div>

        </div>
    </body>
</html>