<?php
$n = readline();
for ($i = 0; $i < $n; $i++) {
    $names[$i] = readline();
}
for ($i = 0; $i < $n; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        if ($names[$i] == $names[$j]) {
            echo $names[$i];
            echo "\n";
        }
    }
}
