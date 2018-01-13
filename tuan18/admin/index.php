<?php require_once '../inc/lib.php'; ?>

<?php
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM post WHERE id={$id}";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			echo "Xóa thành công";
		}
		else{
			echo "Thất bại";
		}
	}

?>
<!doctype html>
<html> 
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> QL Bài Viết </title>
		<link rel="stylesheet" type="text/css" href="../css/qlbaiviet.css">
		<link rel="stylesheet" type="text/css" href="../css/qlbaivietrespon.css">
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
		

		<div id="content">
			<div class="content-left">
				<p> Chức năng </p>
				<ul> 
					<li> <a href="#"> THÊM  </a> </li>
					<li> <a href="#"> SỬA  </a> </li>
					<li> <a href="#"> XÓA  </a> </li>
					<li> <a href="#"> Content-left4 </a> </li>
					<li> <a href="#"> Content-left5 </a> </li>
					<li> <a href="#"> Content-left6 </a> </li>
				</ul>
			</div> <!-- .content-left -->





			<div class="main-content">
				<p> Phần quản lý nội dung bài viết </p>
				<table border="1">
					<tr>
						<td> ID </td>
						<td> Tên post </td>
						<td> Tiêu đề </td>
						<td> Thể loại </td>
						<td> Nội dung</td>
						<td> Ngày tạo </td>
						<td> Tác gỉa</td>
					</tr>


			<?php 
				$sql= "SELECT * FROM post";
				$result= mysqli_query($conn, $sql);
				while($row= mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>

					<tr> 
						<td> <?php echo $row['id']; ?> </td>
						<td> <?php echo $row['ten_post']; ?> </td>
						<td> Đây là tiêu đề 01 </td>
						<td> Thể loại </td>
						<td> Nội dung </td>
						<td> Tác gỉa </td>
						<td>
							<input type="submit" name="submitadd" value="Thêm">

							<a href="sua-post.php?id=<?php echo $row['id']; ?>">  Sửa</a>

							<form method="POST">
										
											<input type="hidden" name="delete" value="<?php echo $row["id"];  ?>">
											
											<button type="submit" onclick="return confirm('bạn có chắc chắn muốn xóa không??')"> Xóa</button>
										</form>
						</td>
					</tr>
				
				<?php } ?>
 

				</table>
			</div> <!-- .main-content -->

		</div>		
	</body>
</html>