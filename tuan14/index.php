<?php
	// ket noi voi db
	$conn=mysqli_connect("localhost","root","","club1");
	if(!$conn){
		die("khong ket noi duoc");
	}else{
		mysqli_set_charset($conn,"utf8");
	
	}
?>
<?php
	// cau lenh sql lay tat ca trong bang sinhvien
	$sql="SELECT * FROM sinhvien";

	// ket noi duoc + bien sql dung
	$query= mysqli_query($conn,$sql); 
	
	// neu !$query
	if(!$query){
		die("sai");
	}
?>

	<table>
		<thead >
			<tr> 
				<th> stt </th>
				<th> hoten </th>
				<th> quequan </th>
				<th> lop </th>
				<th> ngaysinh </th>
				<th> tieu su </th>
				<th> Option</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// tao ra vong lap while, sau do tao ra bien $row vowi nhiem vu lay theo $query, kieu MYSQLI_ASSOC(liên hợp)
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
			?>
				<!-- in ra từng cột của bảng -->
				<tr>
					<td> <?php echo $row["stt"];  ?> </td>
					<td> <?php echo $row["hoten"];  ?> </td>
					<td> <?php echo $row["quequan"];  ?> </td>
					<td> <?php echo $row["lop"];  ?> </td>
					<td> <?php echo $row["ngaysinh"];  ?> </td>
					<td> <?php echo $row["tieusu"];  ?> </td>
					<td> 
						<!-- lam nut edit, dòng này có tác dụng truyền id của người muốn sửa lên thanh url -->
						<a href="edit.php?stt=<?php echo $row['stt']; ?>"> Sua </a> 
						
						<a href="edit.php?stt=<?php echo $row['stt']; ?>"> xoa </a> 
					</td>

				</tr>


			<?php } ?>
	
			
		</tbody>
	</table>
<!-- style cho dep -->
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		th,td{
			border:1px solid black;
		}
	</style>