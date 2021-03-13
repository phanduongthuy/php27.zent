<?php 
	$arr = array(1,4,2,6,9,100,4);

	echo "Mảng ban đầu: ";
	
	foreach ($arr as $value) {
		echo "$value"."&emsp;";
	}
	
	sort($arr);

	echo "<br>Mảng lúc sau: ";

	foreach ($arr as $value) {
		echo "$value"."&emsp;";
	}
 ?>