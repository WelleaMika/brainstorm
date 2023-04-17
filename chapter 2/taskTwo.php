<?php

/* 
Дан массив А(N). Получить массив В(N), i-элемент которого равен среднему арифметическому
первых i элементов массива А.
*/

function getArray (array $array, int $length)
{

    $newArray  = array();
    $sum       = 0;

    for ($x = 0; $x < $length; $x++) {
        for ($y = 0; $y <= $x; $y++) {
            $sum += $array[$y];
        }
        $newArray[$x] = $sum / ($x+1);
        $sum          = 0;
    }
    return $newArray;
}


$length   = rand(0, 20);
$array    = array();

echo 'Длина массива A(N):' . $length . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($i = 0; $i < $length; $i++){
    $array[] = rand(-10, 10);
    echo "$i эллемент массива: " . $array[$i] . "<br>";
}
echo '<br>';

$newArray = getArray ($array, $length);

echo 'Новый массив' . "<br>";
for ($i = 0; $i < $length; $i++){
    echo "$i эллемент массива: " . $newArray[$i] . "<br>";
}

