<?php require_once 'template/lib.php';?>
<?php require_once 'template/head.php'; ?>
<?php require_once 'template/header.php';?>

<div id="content">
			

			<div class="main-content">
				<p> Phần quản lý nội dung bài viết </p>
				<table border="1">
					<tr>
						<td> ID </td>
						<td> Tiêu đề </td>
						<td> Nội dung </td>
						<td> Tạo bởi </td>
						<td> Chức năng</td>
					</tr>


					<?php 
						$sql= "SELECT * FROM posts";
						$r= mysqli_query($conn, $sql);
						while($row=mysqli_fetch_array($r, MYSQLI_ASSOC)):


					?>


					<tr> 
						<td> <?php echo $row["id"]; ?> </td>
						<td> <?php echo $row["title"]; ?> </td>
						<td> <?php echo $row["excerpt"]; ?></td>
						<td> <?php echo $row["content"]; ?> </td>
						<td>
							<input type="submit" name="submitadd" value="Thêm">
							<input type="submit" name="submitedit" value="Sửa">
							<input type="submit" name="submitdel" value="Xóa"> 
						</td>
					</tr>
					
					<?php endwhile; ?>



					

				</table>
			</div> <!-- .main-content -->

		</div>	

<?php require_once 'template/footer.php'; ?>