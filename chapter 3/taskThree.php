<?php

/* 
В массиве А(N,М) найти максимальный и минимальный элементы среди всех элементов тех
строк, которые упорядочены по возрастанию или по убыванию.
*/

function search (array $array, int $length, int $height)
{
    if($length == 1){
        return "Неверный формат массива";
    }

    $raise     = 0;
    $decrease  = 0;
    $line      = -1;

    for ($y = 0; $y < $height; $y++){
        for ($x = 1; $x < $length; $x++){
            if ($array[$y][$x-1] < $array[$y][$x]){
                $raise++;
            }elseif ($array[$y][$x-1] > $array[$y][$x]){
                $decrease++;
            }
        }
        if ($raise + 1 == $length || $decrease + 1 == $length){
            $line = $y;
            break;
        }
        $raise     = 0;
        $decrease  = 0;

    }
    if ($line == -1){
    return 'Нет упорядоченой строки';
    }
    $min       =$array[$line][0];
    $max       =$array[$line][0];
    for ($x = 0; $x < $length; $x++){
        if($array[$line][$x] < $min){
            $min = $array[$line][$x];
        } elseif ($array[$line][$x] > $max) {
            $max = $array[$line][$x];
        }
    }

    echo 'Индекс строки:' . $line . '</br>';
    echo 'Минимальный:'   . $min  . '</br>';
    echo 'Максимальный:'  . $max  . '</br>';

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

echo search($array, $length, $height);

