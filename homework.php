<?php
$n = 30;
$sum = 0;
$prod = 1;

echo "Numbers: ";
for ($i = 1; $i <= $n; $i++) {
    echo $i . ($i == $n ? "" : ", ");
    $sum += $i;
    $prod *= (float)$i; 
}

echo "<br>1 + ... + $n = $sum";
echo "<br>1 * ... * $n = " . number_format($prod, 0, '', '');
?>