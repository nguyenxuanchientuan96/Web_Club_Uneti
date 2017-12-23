<?php require_once 'inc/lib.php'; ?>
<?php require_once 'template/head.php';  ?>
<?php require_once 'template/header.php'; ?>
		<div id="content">
			<div id="main-content">
						
				<div class="block-new">
				<?php 
					$sql= "SELECT * FROM post";
					$result= mysqli_query($conn, $sql);
					while ($row= mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						
					
				?>

					<div class="block-new-img">
						<img src="img/anh1.JPG">
					</div>

					<div class="block-new-content">
						<h2 class="block-new-title">
							<?php echo $row["ten_post"]; ?>		
						</h2>
						<div class="block-new-text">
							<p> 
								<?php echo $row["noi_dung"]; ?>
							</p>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		




			<div id="slidebar">
				<h3> TIN TỨC - SỰ KIỆN </h3>
				<div class="block-new">
					<div class="block-new-content">
						<h2 class="block-new-title">
							Đây là nội dung slidebar h2
						</h2>
						<div class="block-new-text">
							Excepteur sint occaecat cupidatat non
							voluptate velit esse
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>

			</div> <!-- #slidebar -->
		</div> <!-- #content -->

<?php require_once 'template/footer.php'; ?>
		