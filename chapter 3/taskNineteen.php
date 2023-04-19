<?php

/* 
В массиве А(N,M) расположить элементы строк в порядке убывания. Вставить в каждую строку
заданное число р, не нарушая этот порядок.
*/

function changing (array $array, int $height, int $length, int $p)
{
    $newArray = array();
    

        for ($y = 0; $y < $height; $y++){
            for ($i = $length; $i >= 0; $i--) {
                for ($j = 0; $j < ($i-1); $j++)
                    if ($array[$y][$j] < $array[$y][$j+1]) {
                        $tmp = $array[$y][$j];
                        $array[$y][$j] = $array[$y][$j+1];
                        $array[$y][$j+1] = $tmp;
                    }
                }
            }
        $i = 0;

        for ($y = 0; $y < $height; $y++){
            if ($array[$y][0] <= $p){
                $newArray[$y][$i] = $p;
                $i++;
                for ($x = 0; $x < $length; $x++){
                    $newArray[$y][$i] = $array[$y][$x];
                    $i++;
                }
                $i = 0;
                continue;
            }
            for ($x = 0; $x < $length-1; $x++){
                if  (($array[$y][$x] > $p) && ($array[$y][$x+1] <= $p)){
                    $newArray[$y][$i] = $array[$y][$x];
                    $i++;
                    $newArray[$y][$i] = $p;
                    $i++;


                } else {
                    $newArray[$y][$i] = $array[$y][$x];
                    $i++;
                }
            }
            $newArray[$y][$i] = $array[$y][$x];
            $i++;
            if ($array[$y][$length-1] >= $p){
                $newArray[$y][$i] = $p;
            }
            $i = 0;
        }
    return $newArray;
    
}

$length = rand(1, 5);
$height = rand(1, 5);
$array  = array();
$p      = rand(-10, 10);

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
    for ($x = 0; $x < $length + 1; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

