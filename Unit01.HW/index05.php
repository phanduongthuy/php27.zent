<?php 
// Viết chương trình in ra tổng của 10 số chẵn đầu tiên.
 
	$S = 0;
	for ($i = 0; $i < 10; $i++) {
	    $S += $i * 2;
	}
	echo "Tổng của 10 số chẵn đầu tiên là: " . $S;

 ?>