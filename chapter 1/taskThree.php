<?php

/*
Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или
убывания.
*/

$arr = array();

for ($i = 1000; $i <= 9999; $i++) {
    if($i % 2 == 1) {
        continue;
    }
    
    $number = $i;
    $increase = 0;
    $decrease = 0;
    
    while ($number > 9) {
        $firstDigit = $number % 10;
        $number = (int) ($number / 10);
        if(($number % 10) <= ($firstDigit)) {
            $increase++;
        }
        if(($number % 10) >= ($firstDigit)) {
            $decrease++;
        }
    }
    if(($increase == 0) || ($decrease == 0)) {
        $arr[] = $i;
    }
}

print_r($arr);

