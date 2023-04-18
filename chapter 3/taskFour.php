<?php

/* 
В массиве А(N,М) найти сумму тех элементов, в записи которых используются только цифры 0,
1, 3, 8.
*/

function search (array $array, int $length, int $height)
{
    $appropriate = false;
    $sum         = 0;

    for ($y = 0; $y < $height; $y++){
        for ($x = 0; $x < $length; $x++){
            $tmp = $array[$y][$x];
            while ($tmp >0){
                $number = $tmp % 10;
                $tmp    = (int)($tmp / 10);
                if($number == 0 || $number == 1 || $number == 3 || $number == 8){
                    $appropriate = true;
                } else {
                    $appropriate = false;
                    break;
                }
            }

        if($appropriate){
            $sum += $array[$y][$x];
        }
        $appropriate = false;
        }
    }

    echo '</br>' . 'Сумма:' . $sum . '</br>';

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

search($array, $length, $height);

