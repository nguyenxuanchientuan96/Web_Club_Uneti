<?php
	$diemhk1= $_POST["diemhk1"];
	$diemhk2= $_POST["diemhk2"];
	$diemtb= ($diemhk1 + $diemhk2*2)/3;


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Kết quả học tập</title>
</head>
<body>

<form method="POST" action=""> 
	<label>
		Điểm HK1
		<input type="text" name="diemhk1" value="<?php echo $diemhk1; ?>" placeholder="Mời bạn nhập hk1">
	</label>
	<br>
	<label>
		Điểm HK2
		<input type="text" name="diemhk2" value="<?php echo $diemhk2; ?>" placeholder="Mời bạn nhập hk2">
	</label>
<br>


	<label>
		Điểm Trung Bình
		<input type="text" readonly="true" name="diemtb" value="<?php echo $diemtb; ?>">
	</label>


	<label>
		Kết quả
		<input type="text" name="kq" value="
			<?php 
				if($diemtb>=5){
					echo "Được lên lớp";
				} else{ 
				  echo "Đúp";
				} 

			?>



		">
	</label>

	<label>
		Xếp loại học lực
		<input type="text" name="xl">
	</label>

	<input type="submit" name="submit" value="Xem kết quả">

	</form>
	
</body>
</html>