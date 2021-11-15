<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thêm thông tin sinh viên</title>

	<style>
		.error {
			color: reb;
		}
		form tr td {
			color: reb;
		}
	
	</style>
</head>
<body>
	<?php
		include("connection.php");
		$nhapma ="";
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["txtID"])) $nhapma="vui long nhap lai";
		}
	?>
	<h3>THÊM THÔNG TIN SINH VIÊN</h3>

	<form action="xulyqlsinhvien.php" method="POST" onsubmit="return kiemTra()">
		<tr>
		<td>Mã SV </td>
		 
		<td><input type="text" name="txtID" ></td>
		<td><span class="error"><?php echo $nhapma;?></span></td>
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
                    $result = $connect-> query($sql);
                    while($row = $result->fetch_assoc())
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