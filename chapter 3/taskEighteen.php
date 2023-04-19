<?php

/* 
Известно, что в каждой строке и каждом столбце массива А(N,N) имеется единственный
отрицательный элемент. Переставить строки массива так, чтобы отрицательные элементы
находились на главной диагонали.
*/

function changing (array $array, int $size)
{
    $newArray = array();
    $elements = array();

        for ($y = 0; $y < $size; $y++){
            $max = $array[$y][0];
            for ($x = 0; $x < $size; $x++){
                if ($array[$y][$x] < 0) {
                    $elements[$y] = [$y, $x];
                    continue;
            }
        }
        
    }

    for ($x = $size; $x >= 0; $x--) {
        for ($y = 0; $y < ($x-1); $y++)
            if ($elements[$y][1] > $elements[$y+1][1]) {
                $tmp = $elements[$y];
                $elements[$y] = $elements[$y+1];
                $elements[$y+1] = $tmp;
            }
        }

    for ($y = 0; $y < $size; $y++){;
        for ($x = 0; $x < $size; $x++){
            $newArray[$y][$x] = $array[$elements[$y][0]][$x];
        }
    }
    
    return $newArray;
    
}

$size   = 5;
$array  = [
            [1, 1, 1, 1, -1],
            [1, -1, 1, 1, 1],
            [1, 1, 1, -1, 1],
            [1, 1, -1, 1, 1],
            [-1, 1, 1, 1, 1],
        ];

echo 'Размер массива:' . $size . "<br><br>";

echo 'Сгенерированный массив' . "<br>";
for ($y = 0; $y < $size; $y++){
    for ($x = 0; $x < $size; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

$array = changing($array, $size);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $size; $y++){
    for ($x = 0; $x < $size; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

