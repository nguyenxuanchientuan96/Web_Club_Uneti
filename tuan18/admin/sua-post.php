<?php require_once '../inc/lib.php';; ?>
<?php 
	$id= $_GET['id'];
	$sql= "SELECT * FROM post WHERE id={$id}";
	var_dump($sql);

	$query= mysqli_query($conn, $sql);
	$row= mysqli_fetch_array($query, MYSQLI_ASSOC);


	if(empty($row)){
		echo "KHONG TON TAI BAI VIET";
	}

?>

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
				
				$sql= "UPDATE post SET ten_post='{$tenpost}', tieu_de='{$tieude}', the_loai='{$theloai}', noi_dung='{$noidung}', ngay_tao='{$ngaytao}', tac_gia='{$tacgia}' WHERE id= {$id}  ";

				$result= mysqli_query($conn, $sql);
				var_dump($sql);
				if($result){
					echo "edit bài thành công";
				}
				else{
					echo "thất bại".mysqli_error($conn);
				}

			}

	?>


		<div id="content">
		<div id="main-content">
			<h1>Sửa BÀI VIẾT </h1>
			<form class="form" method="POST" action="">
			
			
			<div class="avatar">
				<p> ten post </p>
				<textarea name="txt-post"><?php echo $row['ten_post'] ?></textarea>
				
			</div>

			<div class="text-area">
				<p> tieu de </p>
				<textarea name="txt-tieude"><?php echo $row['tieu_de'] ?></textarea>
			</div> <!-- .text-area -->

			<div class="text-area">
				<p> the loai </p>
				<textarea name="txt-theloai"><?php echo $row['the_loai'] ?></textarea>
			</div> <!-- .text-area -->

			<div class="text-area">
				<p> noi dung </p>
				<textarea name="txt-noidung"><?php echo $row['noi_dung'] ?></textarea>
			</div> <!-- .text-area -->
			<div class="text-area">
				<p> ngay tao </p>
				<textarea name="txt-ngaytao"><?php echo $row['ngay_tao'] ?></textarea>
			</div> <!-- .text-area -->

			<div class="text-area">
				<p>tac gia </p>
				<textarea name="txt-tacgia"><?php echo $row['tac_gia'] ?></textarea>
			</div> <!-- .text-area -->

			


			<input type="submit" name="submit-add" value="Sửa">
			</form>
		</div>
		</div> <!-- #content -->