<?php

/* 
В массиве А(N,M) переставить строки так, чтобы строка с максимальной суммой элементов
стала первой строкой, а остальные строки расположить в порядке возрастания элементов
первого столбца.
*/

function changing (array $array, int $height, int $length)
{
    $newArray = array();
    $max      = 0;
    $yMax     = 0;
    $sum      = 0;
    $elements = array();
    for ($x = 0; $x < $length; $x++){
        $max += $array[0][$x]; 
    }


        for ($y = 0; $y < $height; $y++){
            for ($x = 0; $x < $length; $x++){
                    $sum += $array[$y][$x];
                }
            if ($sum > $max) {
            $max  = $sum;
            $yMax = $y;
            }
            $sum = 0;
        }
        
        for ($x = 0; $x < $length; $x++){
            $newArray[0][$x] = $array[$yMax][$x];
        }

        $m = 0;
        for ($y = 0; $y < $height; $y++){
            if ($y == $yMax){
                continue;
            }
            $elements[$m] = [$y, $array[$y][0]];
            $m++;
        }
        if ($height > 2){
            for ($x = $height - 2 ; $x >= 0; $x--) {
                for ($y = 0; $y <($height - 2); $y++){
                    if ($elements[$y][1] > $elements[$y + 1][1]) {
                        $tmp            = $elements[$y];
                        $elements[$y]   = $elements[$y+1];
                        $elements[$y+1] = $tmp;
                }
            }
        }
        }
        for ($y = 1; $y < $height; $y++){
            for ($x = 0; $x < $length; $x++){
                $newArray[$y][$x] = $array[$elements[$y - 1][0]][$x];
            }
        }
    return $newArray;
    
}

$length = rand(1, 1);
$height = rand(1, 5);
$array  = array();


echo 'Количество столбцов:' . $length . "<br><br>";
echo 'Количество строк:' . $height . "<br><br>";

echo 'Сгенерированный массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    $array[$y][$x] = rand(-10, 0);
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

$array = changing($array, $height, $length);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

