<?php
	//php được viết trong cặp thẻ <?php 
	// -----------------
	
	//Bien trong php:
	//bien: duoc viet bang cong thuc $+tenbien
	$name="Nguyen Xuan Chien Tuan";
	echo $name;
	echo "<br/>"; //xuống hàng cho đẹp :3
	
	//Nối biến: Dùng dấu . để nối biến
	$a="Nhan sắc có hạn";
	$b="Thủ đoạn vô  biên";
	echo $a.$b;
	echo "<br/>"; //xuống hàng cho đẹp :3


	// ------- hằng số
	//hang so: la những gì k thay đổi
	//Công thức: define(name, value)
	
	define("tuoi", "12");
	echo tuoi;
	echo "<br/>"; //xuống hàng cho đẹp :3


	// -------------
	//Hàm var_dump
	//dung var_dump để kiểm tra kiểu dữ liệu
	$so="123456789";
	var_dump($so);
	echo "<br/>"; //xuống hàng cho đẹp :3


	// --------------
	//mang trong php
	$array=array('1','2','3','4');

	echo $array[2];
	echo "<br/>"; //xuống hàng cho đẹp :3


	// ----------------
	//Toan tu trong  php
	$toantu= 3+3;
	echo $toantu;
	echo "<br/>"; //xuống hàng cho đẹp :3
	//==: so sanh
	//=: gan

	// ------------------
	//if else trong php
	$age=19;
	if ($age<18) {
		echo "Vị thành niên";
	}
	elseif($age==18){
		echo "Thanh niên";
	}
	elseif($age==20){
		echo "Thanh niên +2";
	}
	elseif($age==22){
		echo "Thanh niên +4";
	}
	else{
		echo "Được xem";
	}


	echo "<br/>"; //xuống hàng cho đẹp :3
	

	// ------------
	// switch case : tương tự if else
	$tuoi= 18;

	switch ($tuoi) {
		case '18':
			echo "Thanh niên";
			break;

		case '19':
			echo "Thanh niên + 1";
			break;

		case '20':
			echo "Thanh niên +2";
			break;

		case '21':
			echo "Thanh niên +3";
			break;
		
		default:
			echo "cái gì đó";
			break;
	}

	echo "<br/>"; //xuống hàng cho đẹp :3
	

	// vong lap for
	for($i=1; $i<=10; $i++){

		echo $i .",";
	}

	echo "<br/>"; //xuống hàng cho đẹp :3
	

	//range
	$nam=range(1960,2017);
	echo $nam[30];
	echo "<br/>"; //xuống hàng cho đẹp :3

	// ham for-each
	$thang=array(
		1=>"Tháng 1",
		2=>"Tháng 2",
		3=>"Tháng 3",
		4=>"Tháng 4",
		5=>"Tháng 5",
		6=>"Tháng 6",
		7=>"Tháng 7",
		8=>"Tháng 8",
		9=>"Tháng 9",
		10=>"Tháng 10",
		11=>"Tháng 11",
		12=>"Tháng 12",
	);
	foreach ($thang as $key => $value) {
		echo $value;
	}

	echo "<br/>"; //xuống hàng cho đẹp :3
	//while
	$i = 100;
	while ($i <= 200){
	    echo $i;
	  $i++;
	}
	echo "<br/>"; //xuống hàng cho đẹp :3


//hàm trong php  

//ham cong tru nhieu so
	function tinhtong($a, $b, $c, $d, $e )
	{
	    return $a + $b - $c + $d -$e;
	}


	$tong = tinhtong(30,40,30,30,30);
	echo $tong;
	
	


?>