<?php
$n = readline();
$name = readline();
for ($i = 0; $i < $n; $i++) {
    $names[$i] = readline();
}
for ($i = 0; $i < $n; $i++) {
    if ($names[$i] == $name) {
        echo "YES";
        $flag = true;
        break;
    }
}
if ($flag) {
    echo "YES";
} else {
    echo "NO";
}