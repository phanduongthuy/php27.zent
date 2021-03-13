<?php 
	// Viết chương trình khởi tạo 1 chuỗi sau đó chuẩn hóa chuỗi. Cắt bỏ các khoảng trắng đầu cuối hoặc trong chuỗi, viết hoa chữ cái đầu tiên của các từ trong chuỗi. Cuối chuỗi có dấu chấm kết thúc chuỗi.
	
	function mb_ucwords($str)
	{
		return mb_convert_case($str, MB_CASE_TITLE, "UTF-8"); // Chuyển đổi 1 chuỗi str theo dạng Title (Viết hoa chữ cái đầu và cắt các khoảng trắng đầu và cuối chuỗi) được mã hóa ký tự.
	}
	$name = '  pHaN DưƠng          thÙy  ';

	echo "Chuỗi đầu vào: " . "<pre> '" .$name. "' </pre>";

	$new_arr = mb_ucwords($name);
	
	echo "<br>Chuỗi đầu ra: "."'".$new_arr.'.'."'";

 ?>