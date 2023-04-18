<?php

/* 
В матрице А(N,N) найти первую строку, не содержащую отрицательных элементов, и умножить
ее как вектор на матрицу А.
*/

function search (array $array, int $size)
{
    $appropriate = false;
    $sum         = 0;
    $newArray    = array();

    for ($y = 0; $y < $size; $y++){
        for ($x = 0; $x < $size; $x++){
            if ($array[$y][$x] >= 0){
                $appropriate = true;
            } else {
                $appropriate = false;
                break;
            }
            }
        if($appropriate){
            echo 'Результат умножения:' . "<br>";
            for ($i = 0; $i < $size; $i++){
                for ($x = 0; $x < $size; $x++){
                    $sum += $array[$i][$x] * $array[$y][$i];
                }
                $newArray[] = $sum;
                echo $newArray[$i] . "<br>";
                $sum = 0;
            }
            return 0;
        }

    }

    echo '</br>' . 'Нет подходящей строки' . '</br>';

}


$size = rand(1, 20);
$array  = array();

echo 'Размер массива:' . $size . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($y = 0; $y < $size; $y++){
    for ($x = 0; $x < $size; $x++){
    $array[$y][$x] = rand(-10, 10);
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

search($array, $size);

