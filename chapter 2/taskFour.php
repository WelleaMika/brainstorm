<?php

/* 
В массив А(N), упорядоченный по возрастанию, вставить k элементов, не нарушая его
последовательности.
*/

function insertion (array $array, int $length, int $element, int $count)
{


    $newArray   = array();

    for ($x = 0; $x < $length; $x++) {
        if($element < $array[$x]){
            for ($y = 0; $y < $count; $y++){
                $newArray[] = $element;
            }
            for (; $x < $length; $x++){
                $newArray[] = $array[$x];
            }
        } else {
            $newArray[] = $array[$x];
        }
    }
    if (count($newArray) == $length){
        for ($y = 0; $y < $count; $y++){
            $newArray[] = $element;
        }
    }
    return $newArray;
}

$length   = rand(1, 20);
$array    = array();

echo 'Длина массива A(N):' . $length . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($i = 0; $i < $length; $i++){
    $array[] = rand(-10, 10);
}
sort($array);
for ($i = 0; $i < $length; $i++){
    echo "$i эллемент массива: " . $array[$i] . "<br>";
}
echo "</br>";

$count    = rand(1, 20);
$element  = rand(-10, 10);

echo 'Количество элементов:' . $count . "<br><br>";
echo 'Элемент для вставки:' .$element . "<br><br>";
$array = insertion ($array, $length, $element, $count);
echo 'Новый массив' . "<br>";
for ($i = 0; $i < $length + $count; $i++){
    echo "$i эллемент массива: " . $array[$i] . "<br>";
}