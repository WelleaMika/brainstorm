<?php

/* 
В массиве А(N,М) найти сумму элементов тех столбцов, все элементы которых кратны
заданному числу р .5
*/

function search (array $array, int $length, int $height, int $p)
{
    $appropriate = false;
    $sum         = 0;


    for ($x = 0; $x < $length; $x++){
        for ($y = 0; $y < $height; $y++){
                if ($array[$x][$y] % $p ==0){
                    $appropriate = true;
                } else {
                    $appropriate = false;
                    break;
                }
            }
        if($appropriate){
            for ($y = 0; $y < $height; $y++){
            $sum += $array[$y][$x]
            }
        }

    }

    echo '</br>' . 'Сумма:' . $sum . '</br>';

}


$length = rand(1, 20);
$height = rand(1, 20);
$array  = array();
$p = rand(0, 10);

echo 'Количество столбцов:' . $length . "<br><br>";
echo 'Количество строк:' . $height . "<br><br>";
echo 'Количество столбцов:' . $p . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    $array[$y][$x] = rand(-10, 10);
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}



search($array, $length, $height, $p);

