<?php
	// ket noi voi db
	$conn=mysqli_connect("localhost","root","","club1");
	if(!$conn){
		die("khong ket noi duoc");
	}else{
		mysqli_set_charset($conn,"utf8");
	
	}
?>
<?php
	// neu tồn tại tham số stt trên thanh địa chỉ, ta lấy gía trị của nó, tạo thành biến $stt
	if(isset($_GET["stt"])){
		$stt= $_GET["stt"];
	}


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		// lay thong tin ở ô nhập gía trị sửa
		$hoten1= $_POST["hoten"];
		// update bảng với việc thay họ tên của người muốn sửa thành họ tên ng dùng vừa nhập vào
		$sql1= "UPDATE sinhvien SET hoten='{$hoten1}' WHERE stt={$stt}";

		$query1= mysqli_query($conn, $sql1);

		if(!$query1){
			echo "khong thanh cong";
		}
		else{
			echo "thanh cong";
		}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action=""> 
		Ho ten
		<input type="text" name="hoten" placeholder="moi ban nhap noi dung can sua">
		<input type="submit" value="edit">
	</form>
</body>
</html>