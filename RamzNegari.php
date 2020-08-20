<?php
function encrypt($s, $n)
{
    if (!empty($s)) {
        $res = "";
        for ($i = 0; $i < strlen($s); $i++) {
            if (ctype_lower($s[$i]))
                $res .= chr(97 + (ord($s[$i]) - 97 + $n) % 26);
            else
                $res .= chr(65 + (ord($s[$i]) - 65 + $n) % 26);
        }
        return $res;
    }
    return null;
}

function decrypt($str, $n)
{
    if (!empty($str)) {
        $res = "";
        for ($i = 0; $i < strlen($str); $i++) {
            if (ctype_lower($str[$i]))
                $res .= chr(97 + (ord($str[$i]) - 97 - $n) % 26);
            else
                $res .= chr(65 + (ord($str[$i]) - 65 - $n) % 26);
        }
        return $res;
    }
    return null;
}