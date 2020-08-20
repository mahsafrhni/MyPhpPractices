<?php
$num = readline();
$length = strlen((string)$num);
$a = pow(10, $length - 1);
$result = ($num / $a) + ($num % $a) / $a;
echo $result;
echo "e";
echo $length - 1;
