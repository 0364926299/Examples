<?php
	include ("connection.php");

	$txtID = "";
	$txtName = "";
	$Khoa = "";
	$date = "";

	if (isset($_POST))
	{
	    $txtID = $_POST['txtID'];
	    $txtName = $_POST['txtName'];
	    $date = $_POST['date'];
	    $Khoa = $_POST['Khoa'];
	}

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO SinhVien
    VALUES ('$txtID', '$txtName', '$date', '$Khoa')";

    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
$connect->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script language="javascript">
		function QuayLai()
		{
			history.back(-1);
		}
	</script>
</head>
<body>
	<a href='javascript:QuayLai()'>Quay lại trang trước</a>
</body>
</html>