<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thêm thông tin sinh viên</title>
</head>
<body>
	<?php
		include("connection.php");
	?>
	<h3>THÊM THÔNG TIN SINH VIÊN</h3>

	<form action="xuLyThongTin.php" method="POST" onsubmit="return kiemTra()">
		<tr>
		<td>Mã SV </td>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<td><input type="text" name="txtID" id="txtID"></td>
		</tr>
		<br><br>

		<tr>
			<td>Họ và tên </td>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<td><input type="text" name="txtName" id="txtName"></td>
		</tr>
		<br><br>

		<tr>
			<td>Ngày sinh </td>
			&nbsp;&nbsp;
			<td><input type="date" name="date" id="date"></td>
		</tr>
		<br><br>

		<tr>
			<div>Khoa  
				<select id="Khoa" name="Khoa">
                    <?php
                    $sql = "SELECT * FROM Khoa";
                    $result = mysqli_query($connect,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        $ma=$row['MaKhoa'];
                        $ten = $row['TenKhoa'];
                    ?>
                    <option value="<?=$ma?>"><?=$ten?></option>
                    <?php }?>
                </select>
            </div> 
		</tr>
		<br><br>

		<div>
			<input class="form-control" type="submit" name="gui" value = "Thêm">
		</div>
	</form>


	<script language="javascript">
		function kiemTra()
		{
			var MaSV = document.getElementById('txtID').value;
			var hoTen = document.getElementById('txtName').value;
			var ngaySinh = document.getElementById('date').value;
			if (MaSV == '')
				alert ('Bạn chưa nhập mã sinh viên');
			else if (hoTen == '')
				alert ('Bạn chưa nhập tên sinh viên');
			else
				//alert('Dữ liệu hợp lệ');
				return true;
			return false;
		}
	</script>

</body>
</html>