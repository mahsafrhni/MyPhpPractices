<?php
function findHashtags($s)
{
    $ss = explode(" ", $s);
    $res = array();
    foreach ($ss as $x) {
        if (strpos($x, "#") > -1) {
            array_push($res, $x);
        }
    }
    print_r($res);
}

function findPhoneNumbers($comment)
{
    $matches = array();
    if (preg_match_all('09\d{9}', $comment, $matches) ||
        preg_match_all('+9891\d{9}', $comment, $matches)) {
        return $matches[1];
    }
    return array();
}

function boldEmails($s)
{
    $ss = explode(" ", $s);
    $res = array();
    foreach ($ss as $x) {
        if (strpos($x, "#") > -1) {
            array_push($res, $x);
        }
    }
    echo "<br>$res<br>";
}