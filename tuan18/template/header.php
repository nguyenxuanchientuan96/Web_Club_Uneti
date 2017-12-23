
<div id="header">
	<a class="logo">
		<img src="img/logo.png" title="Logo" alt="logo">
	</a>
	<div class="menu">
		<ul> 
			<?php 
				$sql= "SELECT ten_the_loai FROM the_loai";

				$r= mysqli_query($conn, $sql);

				while($row= mysqli_fetch_array($r, MYSQLI_ASSOC)){

			?>

				<li> <a href="#"> <?php echo $row["ten_the_loai"]; ?> </a> </li>
			
			<?php } ?>

			<li> <a href="admin/danh-sach-post.php"> Danh sách bài viết </a> </li>
			<li> <a href="#"> Đăng nhập </a> </li>


		</ul>
	</div>
</div>


