<?php

/* 
В массиве А(N,М) удалить столбцы, все элементы которых являются простыми числами.
*/

function deleting (array $array, int $height, int $length)
{
    $count   = 0;
    $divider = 0;

    echo 'Удаленные столбцы:' . "<br>";
    for ($x = 0; $x < $length; $x++){
        for ($y = 0; $y < $height; $y++){
            if ($array[$y][$x] < 2){
                break;
            }
            for ($i = 2; $i <= $array[$y][$x]; $i++){
                if ($array[$y][$x] % $i == 0){
                    $divider++;
                }
            }
            if ($divider == 1){
                $count++;
            }
            $divider = 0;
        }
        if ($count == $height){
            for ($y = 0; $y < $height; $y++){
                unset($array[$y][$x]);
            }
            echo $x . '</br>';
        }
        $count   = 0;

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

$array = deleting($array, $height, $length);



