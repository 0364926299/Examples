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
        
    // if(!empty($_POST)) {
    //     $tai_khoan = $_POST["tai_khoan"];
    //     $mat_khau = $_POST["mat_khau"];
    //     if(!$tai_khoan) {
    //         echo "<script>alert('VUi lòng nhập tài khoản') </script>";
    //     }
    //     if(!$mat_khau) {
    //         echo "<script>alert('VUi lòng nhập mật khẩu')</script>";
    //     }
        

    //     if(!empty($_POST["tai_khoan"]) && !empty($_POST["mat_khau"])) {
    //         header('Location: trang_chu.php');
    //     }
    // }
    ?>

    <form action="trang_chu.php" method="post">
        <table>
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" name="tai_khoan"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="mat_khau"></td>
            </tr>
            <tr>
                <td><button onclick = check()>Đăng nhập</button></td>
            </tr>
        </table>
    </form>
    

    <script>

        var form = document.querySelector('form');
        var btn = document.querySelector('button');
        var acc = document.querySelector('input[name=tai_khoan]');
        var pas = document.querySelector('input[name=mat_khau]');

        console.log(acc, pas);
        
        form.onsubmit = function(e) {
            e.preventDefault();
            var taiKhoan = acc.value;
            var matKhau = pas.value;
            if(taiKhoan && matKhau) {
                form.submit();
            } 
            else {
                if(!taiKhoan && !matKhau) {
                    alert("Vui lòng nhập tài khoản và mật khẩu");
                } else if (!matKhau) {
                    alert("VUi lòng nhập mật khẩu");
                } else {
                    alert("Vui lòng nhập tài khoản")
                }

            }
        }
    </script>

</body>
</html>