<?php
$n = 30; 
$arr = [];

echo "생성된 랜덤 숫자: ";
for ($i = 0; $i < $n; $i++) {
    $arr[$i] = rand(10, 100);
    echo $arr[$i] . " ";
}

sort($arr);

echo "<br>올림차순 정렬 결과: ";
foreach ($arr as $value) {
    echo $value . " ";
}
?>