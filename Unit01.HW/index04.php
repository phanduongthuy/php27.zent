<?php 
 	echo "<h2 align='center'>Bảng cửu chương bằng for</h2>";
 	echo "<h4 align='center'>Bảng cửu chương</h4>";
	echo "<table width='800' align='center'>";
	  	for($i = 1; $i <= 10; $i++) {

	      	echo "<tr>";

	      	for($j = 2; $j < 10; $j++) {

	          	echo "<td> $j x $i = ".($j*$i)."</td>";

	      	}

	     	echo "</tr>";
	  }

  	echo "</table>";
 ?>