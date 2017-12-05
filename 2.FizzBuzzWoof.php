<?php
	function solution($N) {
   		for ($i = 1; $i <= $N; $i++) {
			$x = 3;
            $y = 5;
            $z = 7;
            $resultX = fmod($i, $x);
            $resultY = fmod($i, $y);
            $resultZ = fmod($i, $z);
            $indX = "";
            $indY = "";
            $indZ = "";
            if ($resultX == 0) {
            	$indX = "Fizz";
            }
            if ($resultY == 0) {
            	$indY = "Buzz";
             }
            if ($resultZ == 0) {
                $indZ = "Woof";
            }
            if ($indX || $indY || $indZ != "") {
               echo $indX.$indY.$indZ."\n";
            }else
             echo $i."\n";
        }
	}
?>
