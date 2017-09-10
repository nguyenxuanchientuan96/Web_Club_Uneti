<?php
	// ket noi voi db
	$conn=mysqli_connect("localhost","root","","club1");
	if(!$conn){
		die("Có lỗi xảy ra với việc kết nối db");
	}else{
		mysqli_set_charset($conn, "utf8"); 
	}
?>

<?php
	// lam nut them don gian
	// lay thong tin + khai bao bien
	$stt= $_POST["txt-stt"];
	$hoten= $_POST["txt-hoten"];
	$quequan= $_POST["txt-quequan"];
	$lop= $_POST["txt-lop"];
	$ngaysinh= $_POST["txt-ngaysinh"];
	$tieusu= $_POST["txt-tieusu"];
	//cau lenh sql
	$sql="INSERT INTO sinhvien(stt,hoten,quequan,lop,ngaysinh,tieusu)

		VALUES('{$stt}', '{$hoten}', '{$quequan}', '{$lop}', '{$ngaysinh}', '{$tieusu}')
	";
	// $result=mysqli_query de tap hop 2 dieu kien tren: $conn va $sql
	$result= mysqli_query($conn,$sql);
	// kiem tra xem da them thanh cong chua
	if(!$result){
		echo "Them that bai";
	}else{
		echo "Them thanh cong";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí thông tin sinh viên</title>	
</head>
<body>
	<form method="POST">
		STT <input type="text" name="txt-stt" value=""> <br> 

		Ho ten <input type="text" name="txt-hoten" value=""> <br> 
		Que quan <input type="text" name="txt-quequan" value=""> <br> 
		Lop <input type="text" name="txt-lop" value=""> <br> 
		Ngaysinh <input type="text" name="txt-ngaysinh" value=""> <br>
		Tieu su <input type="text" name="txt-tieusu" value=""> <br>
		<input type="submit" name="submit-dangki" value="Dang ki">
	</form>
</body>
</html>