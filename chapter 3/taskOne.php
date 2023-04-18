<?php

/* 
В массиве А(N,N) найти суммы элементов, расположенных на главной диагонали, ниже
диагонали и выше диагонали.
*/

function summation (array $array, int $length)
{

    $sumDiag  = 0;
    $sumBelow = 0;
    $sumUp    = 0;

    for ($y = 0; $y < $length; $y++){
        for ($x = 0; $x < $length; $x++){
            if ($x == $y){
            $sumDiag  += $array[$y][$x];
            }
            if ($x < $y){
            $sumBelow += $array[$y][$x];
            }
            if ($x > $y){
            $sumUp    += $array[$y][$x];
            }
        }
    }
    echo "Сумма элементов, расположенных на главной диагонали: $sumDiag </br>";
    echo "Сумма элементов, ниже диагонали: $sumBelow </br>";
    echo "Сумма элементов, выше диагонали: $sumUp";
}


$length       = rand(1, 20);
$array        = array();

echo 'Длина массива A(N):' . $length . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($y = 0; $y < $length; $y++){
    for ($x = 0; $x < $length; $x++){
    $array[$y][$x] = rand(0, 9);
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}

summation($array, $length);
