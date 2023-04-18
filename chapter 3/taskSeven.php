<?php

/* 
В массиве А(N,N) поменять местами максимальные элементы нижнего и верхнего
треугольников относительно главной диагонали.
*/

function swaping (array $array, int $size)
{
    if ($size < 2){
        echo "Неверная размерность массива";
        return 0;
    }
    
    $xUp      = 1;
    $yUp      = 0;
    $xBelow   = 0;
    $yBelow   = 1;
    $maxUp    = $array[$yUp][$xUp];
    $maxBelow = $array[$yBelow][$xBelow];

    for ($y = 0; $y < $size; $y++){
        for ($x = 0; $x < $size; $x++){
            if ($x < $y && $array[$y][$x] > $maxBelow){
                $maxBelow = $array[$y][$x];
                $xBelow   = $x;
                $yBelow   = $y;
            }
            if ($x > $y && $array[$y][$x] > $maxUp){
                $maxUp    = $array[$y][$x];
                $xUp      = $x;
                $yUp      = $y;
            }
        }
    }

    $tmp                     = $array[$yUp][$xUp];
    $array[$yUp][$xUp]       = $array[$yBelow][$xBelow];
    $array[$yBelow][$xBelow] = $tmp;

    echo 'Новый массив' . "<br>";
    for ($y = 0; $y < $size; $y++){
        for ($x = 0; $x < $size; $x++){
            ;
        echo $array[$y][$x] . "   ";
        }
    echo '</br>';
    }
}

$size = rand(1, 20);
$array  = array();

echo 'Размер массива:' . $size . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($y = 0; $y < $size; $y++){
    for ($x = 0; $x < $size; $x++){
    $array[$y][$x] = rand(-10, 10);
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

swaping($array, $size);