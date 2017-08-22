<?php
	//nôm na cách dùng post là như thế này. 
	//a có form bên dưới, cho phép người dùng nhập vào họ tên + ngày sinh, sau đó khi nhấn nút, thì nó in ra màn hình họ tên và ngày sinh người dùng mới nhập vào. 
	// Thì để lấy thông tin mà người dùng nhập vào trong form, ta dùng POST để lấy.
	
	//Đầu tiên, dùng dòng IF này để k có thông báo Notice: Undefined index
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		//dùng $_POST để lấy thông tin ở họ tên, sau đó gán cho nó = biến a
		$a= $_POST["txt-hoten"]; //trong dấu "" là name dưới input
		//tiếp: lấy thông tin ở ô ngày sinh, sau đó gán cho nó = biến b
		$b= $_POST["txt-ngaysinh"];
		//ok, xong, giờ in ra màn hình 2 cái gía trị người dùng mới nhập
		//in ra họ tên
		echo $a;
		//in ra ngày sinh
		echo $b;
	}

	//ok, nôm na post dùng để lấy thông tin người dùng nhập vào trong form

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Post trong php </title>
</head>
<body>
	<form method="POST" action="">
		Họ tên:
		<input type="text" name="txt-hoten" value="" placeholder="Mời bạn nhập họ tên">
		<br>
		Ngày sinh:
		<input type="text" name="txt-ngaysinh" value="" placeholder="Mời bạn nhập ngày sinh">
		<br>
		<input type="submit" name="submit-dangki" value="Đăng kí">
	</form>
</body>
</html>