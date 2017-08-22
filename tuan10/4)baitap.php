
<?php
//bài tập mẫu:
// người dùng nhập vào chiều dài + chiều rộng ở ô, sau đó tính ra diện tích hcn, kết quả in ra ô kết quả
//giới thiệu chút về isset và empty
//trong đó: isset: xét xem có tồn tại hay k? 
		//empty: xét xem có rỗng hay k?
//công thức:
//empty(var) 
//isset(var)

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$chieudai= $_POST["chieudai"];
		$chieurong= $_POST["txt-chieurong"];
		$kq= $chieudai * $chieurong;
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>	Tính diện tích hcn </title>
</head>
<body>
	<form method="POST" action="">
		Chiều dài
		<input type="text" name="chieudai"  value="<?php 
				if (isset($chieudai)) {
					echo $chieudai;
				}else{
					echo " ";
				}

		 ?>">
		

		Chiều rộng
		<input type="text" name="txt-chieurong" value="<?php 
			if (isset($chieurong)) {
					echo $chieurong;
				}else{
					echo " ";
				}
		 ?>">
		 	Kết quả
		 <input type="text" name="ketqua" value="<?php 
		 	if (isset($kq)) {
					echo $kq;
				}else{
					echo " ";
				}
		  ?>">
		<input type="submit" name="submit" value="Tính ">
	</form>
</body>
</html>