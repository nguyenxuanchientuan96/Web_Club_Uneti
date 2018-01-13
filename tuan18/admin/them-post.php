<?php require_once '../inc/lib.php';; ?>
<!doctype html>
<html> 
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Add </title>
		<link rel="stylesheet" type="text/css" href="../css/add.css">
		<link rel="stylesheet" type="text/css" href="../css/add-responsive.css">
	</head>
	<body>
		<div id="header">
			<a class="logo">
				<img src="../img/logo.png" alt="logo" title="logo">
			</a> <!-- .logo -->

			<div class="menu">
				<ul>
					<li> <a href="#"> Trang chủ </a> </li>
					<li> <a href="#"> Tất cả bài viết </a></li>
					<li> <a href="#"> Thêm bài viết</a></li>
					<li> <a href="#"> Tất cả user </a> </li>
					<li> <a href="#"> Thêm user </a> </li>
					<li> <a href="#"> Trợ giúp </a> </li>
					<li> <a href="#"> Thoát </a></li>
				</ul>
			</div> <!-- .menu -->

			<div class="user">
				<ul> 
					<li> <a href="#"> <img src="img/user.png"> </a>
						<ul class="sub-menu">
							<li> <a href="#"> Add account  </a></li>
							<li> <a href="#"> Sign out </a> </li>
						</ul>
					</li>
				</ul>
			</div>
		</div> <!-- #header -->
	<?php
			if($_SERVER["REQUEST_METHOD"]== "POST"){
				
				$tenpost= $_POST['txt-post'];
				$tieude= $_POST['txt-tieude'];
				$theloai= $_POST['txt-theloai'];
				$noidung= $_POST['txt-noidung'];
				$ngaytao= $_POST['txt-ngaytao'];
				$tacgia= $_POST['txt-tacgia'];
				
				$sql= "INSERT INTO post(ten_post, tieu_de, the_loai, noi_dung, ngay_tao, tac_gia) 
					   VALUES('{$tenpost}', '{$tieude}', '{$theloai}', '{$noidung}', '{$ngaytao}', '{$tacgia}' )";

				$result= mysqli_query($conn, $sql);
				
				if(!$result){
					echo "khong them thanh cong";
				}else{
					echo "them thanh cong";
				}

			}

	?>


		<div id="content">
		<div id="main-content">
			<h1> THÊM BÀI VIẾT </h1>
			<form class="form" method="POST" action="">
			
			
			<div class="avatar">
				<p> ten post </p>
				<textarea name="txt-post"></textarea>
				
			</div>

			<div class="text-area">
				<p> tieu de </p>
				<textarea name="txt-tieude"></textarea>
			</div> <!-- .text-area -->

			<div class="text-area">
				<p> the loai </p>
				<textarea name="txt-theloai"></textarea>
			</div> <!-- .text-area -->

			<div class="text-area">
				<p> noi dung </p>
				<textarea name="txt-noidung"></textarea>
			</div> <!-- .text-area -->
			<div class="text-area">
				<p> ngay tao </p>
				<textarea name="txt-ngaytao"></textarea>
			</div> <!-- .text-area -->

			<div class="text-area">
				<p>tac gia </p>
				<textarea name="txt-tacgia"></textarea>
			</div> <!-- .text-area -->

			


			<input type="submit" name="submit-add" value="Thêm">
			</form>
		</div>
		</div> <!-- #content -->