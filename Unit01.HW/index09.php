<?php 
	for ($i = 7; $i >= 0; $i--) {
        for ($j = 0; $j <= 7; $j++) {
            if ($i >= $j) {
                echo " &ensp;";
            } else {
                echo " # ";
            }
        }
        echo "<br>";
    }

 ?>