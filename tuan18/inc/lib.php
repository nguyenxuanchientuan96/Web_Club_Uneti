<?php
	$conn = mysqli_connect("localhost", "root", "root", "club_uneti");
	
	if(!$conn){
		die("Không kết nối được với db");
	}else{
		mysqli_set_charset($conn, "utf8");
	}
	
?>