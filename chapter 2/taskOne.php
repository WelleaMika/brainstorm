<?php

/* 
В массиве А(N) найти: а) число элементов, предшествующих первому отрицательному
элементу; б) сумму нечетных элементов массива, следующих за последним отрицательным
элементом. 
*/

function searchCount (array $array, int $length)
{


    for ($i = 0; $i < $length; $i++){
        if($array[$i] < 0){
        $count = $i;
        return "Число элементов, предшествующих первому отрицательному
        элементу: $count";
        }
    }
    return 'нет отрицательного эллемента';
}

function searchSum (array $array, int $length)
{
    
    $sum = 0;
    
    for ($i = $length - 1; $i >= 0; $i--){
        if($array[$i] < 0){
        break;
        }
    }
    if ($i == -1){
        return 'нет отрицательного эллемента';
    }
    for (; $i < $length; $i++){
        if($i % 2 == 1){
        $sum += $array[$i];
        }
    }
    return "Сумма нечетных элементов массива, следующих за последним отрицательным
    элементом: $sum";
}

$length = rand(0, 20);
$array  = array();

echo 'Длина массива A(N):' . $length . "<br><br>";
echo 'Сгенерированный массив' . "<br>";
for ($i = 0; $i < $length; $i++){
    $array[] = rand(-10, 10);
    echo "$i эллемент массива: " . $array[$i] . "<br>";
}

echo searchCount ($array, $length) . "<br>";
echo searchSum ($array,$length) . "<br>";

