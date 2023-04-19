<?php

/* 
В массиве А(N,М) строку с максимальным количеством знакочередующихся элементов
переставить на первое место.
*/

function insertion (array $array, int $height, int $length)
{
    $count    = 0;
    $tmpCount = 0;
    $divider  = 0;
    $yAlt     = 0;
    $newArray = array();

    for ($y = 0; $y < $height; $y++){
        for ($x = 0; $x < $length-1; $x++){
            if (($array[$y][$x] < 0 && $array[$y][$x+1] >= 0) || ($array[$y][$x] >= 0 && $array[$y][$x+1] < 0)){
                $tmpCount++;
            }
        }
        if( $tmpCount > $count){
            $count = $tmpCount;
            $yAlt  = $y;
        }
        $tmpCount = 0;
    }

    for ($x = 0; $x < $length; $x++){
        $newArray[0][$x] = $array[$yAlt][$x];
    }
    for ($y = 0; $y < $yAlt; $y++){
        for ($x = 0; $x < $length; $x++){
            $newArray[$y+1][$x] = $array[$y][$x];
        }
    }
    for ($y = $yAlt+1; $y < $height; $y++){
        for ($x = 0; $x < $length; $x++){
            $newArray[$y][$x] = $array[$y][$x];
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

$array = insertion($array, $height, $length,);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';


