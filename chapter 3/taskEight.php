<?php

/* 
В каждой строке массива А(N,М) удалить все четные положительные элементы, стоящие
между первым и последним максимальными элементами.
*/

function search (array $array, int $height, int $length)
{
    for ($y = 0; $y < $height; $y++){
        $max   = $array[$y][0];
        $first = 0;
        $last  = 0;
        for ($x = 0; $x < $length; $x++){
            if($array[$y][$x] >= $max){
                $max   = $array[$y][$x];
                $last  = $x;
            }
        }
        for ($x = 0; $x < $length; $x++){
            if($array[$y][$x] == $max){
                $first  = $x;
                break;
            }
        }
        echo "Удаленные эллементы в $y строке:" . "<br>";
        for ($x = $first+1; $x < $last; $x++){
            if($array[$y][$x] > 0 && $array[$y][$x] % 2 == 0){
                echo $array[$y][$x] . "<br>";
                unset($array[$y][$x]);
            }
        }
    }
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

search($array, $height, $length);

