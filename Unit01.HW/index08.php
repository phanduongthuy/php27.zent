<?php 
	for ( $i = 1; $i <= 8; $i++) {
	    for ( $j = 1; $j <= 8; $j++) {
	        if ($j >= $i) {
	            echo " # ";
	        } else {
	            echo " &ensp;";
	        }
	    }
	    echo "<br>";
	}


 ?>