<?php 
	$arr = array(1,4,2,6,9,100,4);
	
	echo "Mảng ban đầu: ";
	
	foreach ($arr as $value) {
		echo "$value"."&emsp;";
	}
	
	$new_arr = array_reverse($arr);

	echo "<br>Mảng lúc sau: ";

	foreach ($new_arr as $value) {
		echo "$value"."&emsp;";
	}
	
 ?>