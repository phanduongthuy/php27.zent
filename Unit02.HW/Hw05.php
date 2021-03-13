<?php 
	$name = 'Đặng Thị Thúy Nga';

	//Tách họ tên thành 1 mảng họ tên
	$arr_name = explode(" ", $name);

	//Xác định phần họ, tên trước 

	$so_phan_tu = count($arr_name);

	$ho = $arr_name[0];
	$ten = $arr_name[$so_phan_tu-1];

	//Lấy họ đệm
	$ho_dem = "";
	For($i = 1; $i < ($so_phan_tu - 1); $i++) {
		$ho_dem = $ho_dem . $arr_name[$i] . " ";
	}

	echo "Chuỗi đầu vào: ".$name;
	echo "<br>Kết quả đầu ra: ";
	echo "<ul>";
		echo "<li>";
			echo "Họ: " . $ho;
		echo "</li>";

		echo "<li>";
			echo "Họ đệm: " . $ho_dem;
		echo "</li>";

		echo "<li>";
			echo "Tên: " . $ten;
		echo "</li>";
	echo "</ul>";
	
 ?>