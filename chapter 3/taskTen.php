<?php

/* 
В массиве А(N,М) поменять местами столбцы, содержащие максимальный и минимальный
элементы.
*/

function insertion (array $array, int $height, int $length)
{
    $min    = $array[0][0];
    $max    = $array[0][0];
    $xMin   = 0;
    $xMax   = 0;
    $tmpArr = array();

    for ($x = 0; $x < $length; $x++){
        for ($y = 0; $y < $height; $y++){
            if($array[$y][$x] < $min){
                $min  = $array[$y][$x];
                $xMin = $x;
            }
            if($array[$y][$x] > $max){
                $max = $array[$y][$x];
                $xMax = $x;
            }
        }
    }
    for ($y = 0; $y < $height; $y++){
        $tmpArr[$y] = $array[$y][$xMin];
    }
    for ($y = 0; $y < $height; $y++){
        $array[$y][$xMin] = $array[$y][$xMax];
    }
    for ($y = 0; $y < $height; $y++){
        $array[$y][$xMax] = $tmpArr[$y];
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
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

$array = insertion($array, $height, $length);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

