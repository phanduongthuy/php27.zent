<?php 
// Giải phương trình bậc 2 ax^2 + bx + c = 0 với a,b và c là 3 giá trị truyền vào biến $a, $b, $c.

    $a = 2;
    $b = 3;
    $c = 0;

    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                echo "Phương trình có vô số nghiệm." ;
            } else {
                echo "Phương trình vô nghiệm." ;
            }
        } else {
            $x1 = (-$c / $b) ;
            echo "Phương trình có nghiệm duy nhất x= " . $x1 ;
        }
    } else {
        $delta = ($b * $b) - (4 * $a * $c) ;
        if ($delta < 0) {
            echo "Phương trình vô nghiệm." ;
        } else if ($delta == 0) {
            $x1 = (-$b) / (2 * $a) ;
            echo "Phương trình có nghiệm kép x1=x2= " . $x1 ;
        } else {
            $x1 = ((-$b) + sqrt($delta)) / (2 * $a) ;
            $x2 = ((-$b) - sqrt($delta)) / (2 * $a) ;
            echo "Phương trình có 2 nghiệm phân biệt: <br>" ;
            echo "x1 = $x1 <br>";
            echo "x2 = $x2";
        }
    }

 ?>