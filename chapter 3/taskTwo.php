<?php

/* 
В массиве А(N,М) найти номер строки, среднее арифметическое положительных элементов
которой является наименьшим.
*/

function search (array $array, int $length, int $height)
{
    if($height == 1){
        return '0';
    }

    $number     = 0;
    $average    = 0;
    $count      = 0;
    $newAverage = 0;
    for ($y = 0; $y < $height; $y++){
        for ($x = 0; $x < $length; $x++){
            if ($array[$y][$x] > 0){
            $average += $array[$y][$x];
            $count++;
            }
        }
        if($average > 0){
            $number = $y;
            break;
        }
        $count = 0;
    }
    
    $average  = $average / $count;
    $count    = 0;
    for (; $y < $height; $y++){
        for ($x = 0; $x < $length; $x++){
            if ($array[$y][$x] > 0){
            $newAverage += $array[$y][$x];
            $count++;
            }
        }
        if ($average > $newAverage && $count > 0){
            $average = $newAverage / $count;
            $number  = $y;
        }
        $newAverage = 0;
        $count      = 0;
    }
    return $number ;

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

echo "Номер строки, среднее арифметическое положительных элементов которой является наименьшим: " . search($array, $length, $height);