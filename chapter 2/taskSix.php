<?php

/* 
Получить упорядоченный по возрастанию массив С(К) путем слияния двух порядоченных по
возрастанию массивов А(N) и В(М), где К=М+N.
*/

function insertion (array $array, int $length, array $secondArray, int $secondLength)
{

    $x          = 0;
    $y          = 0;
    $newArray   = array();

    for ($i = 0; $i < $length + $secondLength; $i++) {
        if($secondArray[$x] < $array[$y]){
            $newArray[] = $secondArray[$x];
            $x++;
        } else {
            $newArray[] = $array[$y];
            $y++;
        }
        if ($x == $secondLength){
            for ($i = $y ; $i < $length; $i++) {
                $newArray[] = $array[$i];
            }
            break;
        } elseif ($y == $length){
            for ($i = $x; $i <$secondLength; $i++) {
                $newArray[] = $secondArray[$i];
            }
            break;
        }
    }
    return $newArray;
}

$length       = rand(1, 20);
$array        = array();

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

$secondLength = rand(1, 20);
$secondArray  = array();

echo 'Длина массива B(M):' . $secondLength . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($i = 0; $i < $secondLength; $i++){
    $secondArray[] = rand(-10, 10);
}
sort($secondArray);
for ($i = 0; $i < $secondLength; $i++){
    echo "$i эллемент массива: " . $secondArray[$i] . "<br>";
}
echo "</br>";

$newArray = insertion ($array, $length, $secondArray, $secondLength);
echo 'Новый массив' . "<br>";
for ($i = 0; $i < $length + $secondLength; $i++){
    echo "$i эллемент массива: " . $newArray[$i] . "<br>";
}