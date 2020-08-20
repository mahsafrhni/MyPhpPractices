<?php
$to_date = time(); // Input your date here e.g. strtotime("2014-01-02")
$date = readline();
$from_date = strtotime($date);
$day_diff = $to_date - $from_date;
echo floor($day_diff / (60 * 60 * 24)) . "\n";
?>