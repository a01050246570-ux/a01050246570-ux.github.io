<?php
$n = 10; 
$fib = [0, 1];

echo "피보나치 수열 및 비례:<br>";
for ($i = 0; $i < $n; $i++) {
    if ($i > 1) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    echo "F($i): " . $fib[$i];
    
   
    if ($i > 0 && $fib[$i-1] != 0) {
        $ratio = $fib[$i] / $fib[$i - 1];
        echo " (비례: " . round($ratio, 4) . ")";
    }
    echo "<br>";
}
?>