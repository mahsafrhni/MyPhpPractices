<?php
$height = readline();
$weight = readline();
$bmi = $weight / $height ** 2;
if ($bmi < 18.5) {
    echo "Underweight";
} elseif ($bmi < 25) {
    echo "Normal";
} elseif ($bmi < 30) {
    echo "Overweight";
} elseif ($bmi > 30) {
    echo "Obese";
}
