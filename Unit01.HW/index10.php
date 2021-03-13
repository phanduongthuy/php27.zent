<?php 
    $n = 10;
    $gt = 1;
    $s = 0;
    for ($i=1; $i <= $n; $i++) { 
       	$gt *= $i;
       	$s += $i / $gt;
    }  
    echo "Tổng S = $s"; 

 ?>