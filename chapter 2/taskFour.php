<?php

/* 
В массив А(N), упорядоченный по возрастанию, вставить k элементов, не нарушая его
последовательности.
*/

function insert (array $array, int $length, array $elements, int $count)
{
    for ($x = 0; $x < $count - 1; $x++){
        for ($y = 0; $y < $count - $x - 1; $y++){
            if ($elements[$y] > $elements[$y + 1]){
                $tmpVar = $elements[$y + 1];
                $elements[$y + 1] = $elements[$y];
                $elements[$y] = $tmpVar;
            }
        }
    }
    $x          = 0;
    $y          = 0;
    $newArray   = array();

    for ($i = 0; $i < $length + $count; $i++) {
        if($elements[$x] < $array[$y]){
            $newArray[] = $elements[$x];
            $x++;
        } else {
            $newArray[] = $array[$y];
            $y++;
        }
        if ($x == $count){
            for ($i = $y ; $i < $length; $i++) {
                $newArray[] = $array[$i];
            }
            break;
        } elseif ($y == $length){
            for ($i = $x; $i <$count; $i++) {
                $newArray[] = $elements[$i];
            }
            break;
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
$elements = array();

echo 'Количество элементов:' . $count . "<br><br>";
echo 'Элементы для вставки' . "<br>";
for ($i = 0; $i < $count; $i++){
    $elements[] = rand(-10, 10);
    echo "$i эллемент: " . $elements[$i] . "<br>";
}
echo '<br>';

$newArray = insert ($array, $length, $elements, $count);
echo 'Новый массив' . "<br>";
for ($i = 0; $i < $length + $count; $i++){
    echo "$i эллемент массива: " . $newArray[$i] . "<br>";
}