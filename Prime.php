<?php
function isPrime($number)
{
    if ($number <= 1)
        return false;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}

$input = readline();
if ($input == 0 || $input == 1 || !isPrime($input)) {
    echo "it is not prime";
} else {
    echo "it is  prime";
}
