<?php
function getExtension($string)
{
    if (!empty($string)) {
        if (strpos($string, ".") === false) {
            return "";
        } else {
            $info = pathinfo($string);
            $b = explode('.', $string);
            $ext = end($b);
            $result = substr($ext, 0);
            return $result;
        }
    } else {
        return "";
    }
}

// txt;
echo getExtension('/home/quera/sample_file.txt'); // '' (empty string)
;




