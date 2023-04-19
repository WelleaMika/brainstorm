<?php

/* 
В массив А(N,М) вставить одномерный массив В(N), расположив его перед последним
столбцом, содержащим нулевой элемент. Если такого столбца не окажется, то вставить массив
В(N) после последнего столбца.
*/

function insertion (array $array, int $height, int $length, array $secondArray)
{
    $count   = 0;
    $divider = 0;
    $xZero   = -1;

    for ($x = 0; $x < $length; $x++){
        for ($y = 0; $y < $height; $y++){
            if ($array[$y][$x]  == 0){
                $xZero = $x;
            }
        }
    }
    if ($xZero == -1){
        for ($y = 0; $y < $height; $y++){
            $array[$y][$length] = $secondArray[$y];
        }
        return $array;
    } else {
        $newArray = array();
        for ($x = 0; $x < $xZero; $x++){
            for ($y = 0; $y < $height; $y++){
                    $newArray[$y][$x] = $array[$y][$x];
                }
        }
        for ($y = 0; $y < $height; $y++){
            $newArray[$y][$x] = $secondArray[$y];
        }
        for (; $x < $length; $x++){
            for ($y = 0; $y < $height; $y++){
                $newArray[$y][$x+1] = $array[$y][$x];
            }
        }
        return $newArray;
    }
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

echo 'Сгенерированный одномерный массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    $secondArray[$y] = rand(-10, 10);
    echo $secondArray[$y] . '</br>';
}
echo '</br>';

$array = insertion($array, $height, $length, $secondArray);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length+1; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';



