<?php
$date = readline();  //1399/05/03
$date = explode('/', $date);
$day = $date[2];  //3
$monthes[$date[1]] = $date[1];  //months[5]=5
//foreach (range(1, 12) as $j) {
//    if ($j < 7) {
//        $daysof[$j] = 31;
//    } else {
//        if ($j == 12) {
//            $daysof[$j] = 29;
//        } else {
//            $daysof[$j] = 30;
//        }
//    }
//}
$daysof[0] = 31;
$daysof[1] = 31;
$daysof[2] = 31;
$daysof[3] = 31;
$daysof[4] = 31;
$daysof[5] = 31;
$daysof[6] = 30;
$daysof[7] = 30;
$daysof[8] = 30;
$daysof[9] = 30;
$daysof[10] = 30;
$daysof[11] = 29;
$days = 0;
for ($i = 0; $i < $date[1] - 1; $i++) {
    $days += $daysof[$i];
}
$days += $day;
echo 366 - $days;