<?php

/* 
В массиве А(N) подсчитать количество различных элементов.
*/

function counting (array $array, int $length)
{

    $newArray     = array();
    $newArray[0]  = $array[0];
    $count        = 1;
    $coincidences = 0;

    for ($x = 1; $x < $length; $x++) {
        for ($y = 0; $y < $count; $y++) {
            if ($newArray[$y] == $array[$x]) {
                $coincidences++;
            }
        }
        if ($coincidences == 0) {
            $newArray[] = $array[$x];
            $count++;
        }
        $coincidences = 0;
    }
    return $count;
}

$length   = rand(1, 20);
$array    = array();

echo 'Длина массива A(N):' . $length . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($i = 0; $i < $length; $i++){
    $array[] = rand(-10, 10);
    echo "$i эллемент массива: " . $array[$i] . "<br>";
}
echo '<br>';

echo 'Количество различных элементов:' . counting ($array, $length);