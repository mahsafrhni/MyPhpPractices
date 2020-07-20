<?php
function formatCardNumber($number)
{
    $is_number = ctype_digit($number);
    if ($is_number == false) {
        return NULL;
    } else {
        $num = "";
        $number_array = str_split($number);
        foreach ($number_array as $i => $c) {
            $num .= ($i == 3 || $i == 7 || $i == 11 || $i == 15) ? $c . " " : $c;
        }
        return trim($num);
    }
}
