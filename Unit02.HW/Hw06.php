<?php 
	// Khởi tạo 1 chuỗi sau đó kiểm tra xem chuỗi đó có phải là chuỗi Palindrome hay không?
	$str = 'ZenttneZ';
	function kiem_tra_chuoi_palindrome($str)   
		{  
		  if ($str == strrev($str))  
			  return $str." Là chuỗi palindrome.";  
		  else  
			  return $str." Không phải chuỗi palindrome.";  
		} 
		echo kiem_tra_chuoi_palindrome($str);
 ?>