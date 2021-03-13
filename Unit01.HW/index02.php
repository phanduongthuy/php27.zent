<?php 
// Viết chương trình giải phương trình bậc nhất ax + b = 0 với a và b là 2 giá trị truyền vào biến $a và $b.

	$a = -4;
	$b = 3; 

	if ($a == 0) {
	    if ($b == 0) {
	        echo "Phương trình có vô số nghiệm.";
	    } else {
	        echo "Phương trình vô nghiệm.";
	    }
	} else {
	    echo "Phương trình có nghiệm x = -$b / $a";
	}


 ?>