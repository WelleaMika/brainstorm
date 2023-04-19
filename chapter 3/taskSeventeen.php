<?php

/* 
В массиве А(N,M) элементы, кратные заданному числу р, переместить в начало строк и
расположить их в порядке возрастания.
*/

function changing (array $array, int $height, int $length, int $p)
{
    $count    = 0;
    $newArray = array();
    $elements = array();

    for ($y = 0; $y < $height; $y++){
        for ($x = 0; $x < $length; $x++){
            if ($array[$y][$x] % $p == 0) {
                $newArray[$y][$count] = $array[$y][$x];
                $count++;
            }
        }
        if($count > 1){
            for ($i = $count; $i >= 0; $i--) {
                for ($j = 0; $j < ($i-1); $j++) {
                    if ($newArray[$y][$j] > $newArray[$y][$j+1]) {
                        $tmp = $newArray[$y][$j];
                        $newArray[$y][$j] = $newArray[$y][$j+1];
                        $newArray[$y][$j+1] = $tmp;
                    }
                }
            }
        }
        for ($x = 0; $x < $length; $x++){
            if ($array[$y][$x] % $p != 0) {
                $newArray[$y][$count] = $array[$y][$x];
                $count++;
            }
        }
    $count = 0;
    }


    return $newArray;
    
}

$length = rand(1, 5);
$height = rand(1, 5);
$p      = rand(1, 10);
$array  = array();

echo 'Количество столбцов:' . $length . "<br><br>";
echo 'Количество строк:' . $height . "<br><br>";
echo 'Заданное число:' . $p . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    $array[$y][$x] = rand(-10, 10);
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

$array = changing($array, $height, $length, $p);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $height; $y++){
    for ($x = 0; $x < $length; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';



