<?php
$name1 = readline();
$name2 = readline();
$name3 = readline();
$scores = [
    $name1 => 0,
    $name2 => 0,
    $name3 => 0,
];
$first = readline();
if (array_key_exists($first, $scores)) {
    $scores[$first] += (int)readline();
}
$second = readline();
if (array_key_exists($second, $scores)) {
    $scores[$second] += (int)readline();
}
$third = readline();
if (array_key_exists($third, $scores)) {
    $scores[$third] += (int)readline();
}
$forth = readline();
if (array_key_exists($forth, $scores)) {
    $scores[$forth] += (int)readline();
}
$value = max($scores);
$key = array_search($value, $scores);
echo $key;