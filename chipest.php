<?php
$n = readline();
$m = readline();
$names = [];
$prices1 = [];
$prices2 = [];
for ($i = 0; $i < $n; $i++) {
    $names[$i] = readline();
}
for ($i = 0; $i < $n; $i++) {
    $prices1[$i] = readline();
}
$prices2 = $prices1;
sort($prices1);
for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($prices1[$i] == $prices2[$j]) {
            echo $names[$j];
            break;
        }
    }
    echo ":";
    echo "$prices1[$i]\n";
}
