<?php

/* 
В массив А(N), упорядоченный по возрастанию, вставить k элементов, не нарушая его
последовательности.
*/

function insert (array $array, int $length)
{

    $countZero = 0;

    for ($x = 0; $x < $length; $x++){
        if($array[$x] == 0){
            $countZero++;
        }
    }
    for ($x = 0; $x < $length - 1; $x++){
        for ($y = 0; $y < $length - $x - 1; $y++){
            if ($array[$y] > $array[$y + 1]){
                $tmpVar = $array[$y + 1];
                $array[$y + 1] = $array[$y];
                $array[$y] = $tmpVar;
            }
        }
    }
    for ($x = 0; $x < $length - 1; $x++){
        for ($y = $countZero; $y < $length - $x - 1; $y++){
            if ($array[$y] < $array[$y + 1]){
                $tmpVar = $array[$y + 1];
                $array[$y + 1] = $array[$y];
                $array[$y] = $tmpVar;
            }
        }
    }
    return $array;
}

$length   = rand(1, 20);
$array    = array();

echo 'Длина массива A(N):' . $length . "<br><br>";
echo 'Сгенерированный массив' . "<br>";

for ($i = 0; $i < $length; $i++){
    $array[] = rand(0, 2);
    echo "$i эллемент массива: " . $array[$i] . "<br>";
}


echo "</br>";
$count    = rand(1, 20);
$elements = array();

echo '<br>';

$newArray = insert ($array, $length);
echo 'Новый массив' . "<br>";
for ($i = 0; $i < $length; $i++){
    echo "$i эллемент массива: " . $newArray[$i] . "<br>";
}