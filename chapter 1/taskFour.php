<?php

/*
Получить все четырехзначные числа, в записи которых встречаются только цифры 0,2,3,7. Тут
речь идёт про числа, где встречается только данный набор цифр, без повторений, т.е. 2037 -
верно, 2000 - не верно
*/

$arr = array();

for ($i = 2037; $i <= 7320; $i++) {

    $number = $i;
    $countZero = 0;
    $countTwo = 0;
    $countThree = 0;
    $countSeven = 0;
    
    while ($number > 0) {
        switch ($number % 10) {
            case 0:
                $countZero++;
                break;
            case 2:
                $countTwo++;
                break;
            case 3:
                $countThree++;
                break;
            case 7:
                $countSeven++;
                break;
        }
    $number = (int) ($number / 10);
    }
    if(($countZero == 1) && ($countTwo == 1) && ($countThree == 1) && ($countSeven == 1)) {
        $arr[] = $i;
    }
}

print_r($arr);


