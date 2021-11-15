<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script  language ="javascript">
        function kiemtra(){
            var Nguoisudung= document.getElementById('Nguoisudung').value;
            var Matkhau =document.getElementById('MatKhau').value;

            if(Nguoisudung== ''){
            alert('Bạn chưa nhập tên đăng nhập');}
            else{
            if(Matkhau =='')
            alert(' Bạn chưa nhập mật khâu');
            else{
                //alert ('du lieu hop le)
                return true;
            }
            return false;
        }
    }
    </script>

    <form action="dangnhapthanhcong.php" method="post" onsubmit="return kiemtra()">
        <table>
            <tr>
                <td>Nguòi sử dụng :</td>
                 <td> <input type="text" name="Nguoisudung" id="Nguoisudung"></td>

            </tr>
            <tr>
                <td> Mật khẩu :</td>
                <td> <input type="password" name="MatKhau" id="MatKhau"></td>
            </tr>
            <tr colspan ="2" align="center"> <input type="submit" name="DangNhap" value="Đăng nhập"> </tr>
        </table>

    </form>

    
    // if(Taikhoan === "") {
            //     alert("chưa nhập tài khoản");
            // } else {
            //     if(matkhau === "") {
            //         alert("chưa nhập mật khẩu");
            //     } else if(taikhoan===""&&matkhau === "") {
            //         alert("chưa nhập tài khoản và mật khẩu");
            //     } else {
            //         return true;
            //     }
            // }
            // return false;
</body>
</html>



