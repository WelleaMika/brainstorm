<?php

/* 
В массиве А(N,M) расположить строки по убыванию значений максимальных элементов строк.
*/

function changing (array $array, int $height, int $length)
{
    $count    = 0;
    $tmpCount = 0;
    $xAlt     = 0;
    $newArray = array();
    $elements = array();

        for ($y = 0; $y < $height; $y++){
            $max = $array[$y][0];
            for ($x = 0; $x < $length; $x++){
                if ($array[$y][$x] > $max) {
                    $max = $array[$y][$x];
            }
            $elements[$y] = [$y, $max];
        }
        
    }

    for ($x = $height; $x>=0; $x--) {
        for ($y = 0; $y<($x-1); $y++)
            if ($elements[$y][1]<$elements[$y+1][1]) {
                $tmp = $elements[$y];
                $elements[$y] = $elements[$y+1];
                $elements[$y+1] = $tmp;
            }
        }

    for ($y = 0; $y < $height; $y++){;
        for ($x = 0; $x < $length; $x++){
            $newArray[$y][$x] = $array[$elements[$y][0]][$x];
        }
    }
    
    return $newArray;
    
}

$length = rand(1, 5);
$height = rand(1, 5);
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

$array = changing($array, $height, $length,);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';



