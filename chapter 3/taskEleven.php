<?php

/* 
В массиве А(N,М) удалить нулевые строки.
*/

function deleting (array $array, int $height, int $length)
{
    $count = 0;
    echo 'Удаленные строки:' . "<br>";
    for ($y = 0; $y < $height; $y++){
        for ($x = 0; $x < $length; $x++){
            if ($array[$y][$x] === NULL){
                $count++;
            }
        }
        if($count == $length){
            for ($x = 0; $x < $length; $x++){
                unset($array[$y][$x]);
            }
            echo $y . '</br>';
        }
        $count = 0;
    }

    return $array;
}

$length = rand(1, 20);
$height = rand(1, 20);
$array  = array();

echo 'Количество столбцов:' . $length . "<br><br>";
echo 'Количество строк:' . $height . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    $array[$y][$x] = rand(-10, 10);
    if($array[$y][$x] < 0){
    $array[$y][$x] = NULL;
    }
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

$array = deleting($array, $height, $length);

