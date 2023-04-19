<?php

/* 
В массиве А(N,М) столбец с минимальным количеством нечетных элементов переставить на
последнее место.
*/

function insertion (array $array, int $height, int $length)
{
    $count    = 0;
    $tmpCount = 0;
    $xAlt     = 0;
    $newArray = array();

    for ($x = 0; $x < $length; $x++){
        for ($y = 0; $y < $height; $y++){
            if ($array[$y][$x] % 2 == 0){
                $tmpCount++;
            }
        }
        if( $tmpCount > $count){
            $count = $tmpCount;
            $xAlt  = $x;
        }
        $tmpCount = 0;
    }

    for ($x = 0; $x < $xAlt; $x++){
        for ($y = 0; $y < $height; $y++){
            $newArray[$y][$x] = $array[$y][$x];
        }
    }
    for ($x = $xAlt+1; $x < $length; $x++){
        for ($y = 0; $y < $height; $y++){
            $newArray[$y][$x-1] = $array[$y][$x];
        }
    }
    for ($y = 0; $y < $height; $y++){
        $newArray[$y][$x-1] = $array[$y][$xAlt];
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

$array = insertion($array, $height, $length,);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';



