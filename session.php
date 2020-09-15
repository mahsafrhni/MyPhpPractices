<?php
function addOrdinalNumberSuffix($num)
{
    if (!in_array(($num % 100), array(11, 12, 13))) {
        switch ($num % 10) {
            case 1:
                return $num . 'st';
            case 2:
                return $num . 'nd';
            case 3:
                return $num . 'rd';
        }
    }
    return $num . 'th';
}

session_start();
if (isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views'] + 1;
else
    $_SESSION['views'] = 1;
echo "This is your " . addOrdinalNumberSuffix($_SESSION['views']);
echo " visit in this session."
?>