<?php 
	// la file ket noi với db
	$conn= mysqli_connect("localhost", "root", "root","uneti_cms");
	if(!$conn){
		die("khong ket noi duoc voi db");
	}else{
		mysqli_set_charset($conn, "utf-8");
	}

?>