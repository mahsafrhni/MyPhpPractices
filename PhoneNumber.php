<?php
function formatPhoneNumber($number)
{
    if ($number[0] . $number[1] != "09") {
        echo "NULL";
    } else {
        $ptn = "/^0/";  // Regex
        $rpltxt = "+98";  // Replacement string
        return preg_replace($ptn, $rpltxt, $number);
    }
}

$input = readline();
var_dump(formatPhoneNumber($input));