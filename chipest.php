<?php
$n = readline();
$m = readline();
$names = [];
$prices = [];
for ($i = 0; $i < $n; $i++) {
    $names[$i] = readline();
}
for ($i = 0; $i < $n; $i++) {
    $prices[$i] = readline();
}
sort($prices);
//$a = [$names => $prices];
$price = array();
//foreach ($inventory as $key => $row)
//{
//    $price[$key] = $row['price'];
//}
for ($i = 0; $i < $m; $i++) {
    echo $names[$i];
    echo ":";
    echo "$prices[$i]\n";
}
