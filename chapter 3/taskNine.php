<?php

/* 
В массив А(N,М) после первого отрицательного элемента каждого столбца вставить число,
равное минимальному элементу этого столбца. Если столбец не содержит отрицательных
элементов, то вставить это число перед первым элементом столбца.
*/

function insertion (array $array, int $height, int $length)
{
    $appropriate = true;
    $newArray    = array();
    $line        = 0;

    for ($x = 0; $x < $length; $x++){
        $min = $array[0][$x];
        for ($y = 0; $y < $height; $y++){
            if($array[$y][$x] < 0){
                $appropriate = false;
                $line = $y;
                break;
            }
        }
        for ($y = 0; $y < $height; $y++){
            if($array[$y][$x] < $min){
                $min = $array[$y][$x];
            }
        }
            
        $i = 0;
        if($appropriate){
            $newArray[$i][$x] = $min;
            for ($y = 0; $y < $height; $y++){
                $i++;
                $newArray[$i][$x] = $array[$y][$x];
            }
        } else{
            for ($y = 0; $y < $height; $y++){
                if($i - 1 == $line){
                    $newArray[$i][$x] = $min;
                    for (; $y < $height; $y++){
                        $i++;
                        $newArray[$i][$x] = $array[$y][$x];
                    }
                } else {
                    $newArray[$i][$x] = $array[$y][$x];
                    $i++;
                }
            }
            if($line + 1 == $height){
                $newArray[$height][$x] = $min;
            }
        }
        $line = 0;
        $appropriate = true;
    }
    return $newArray;
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

$array = insertion($array, $height, $length);

echo 'Новый массив' . "<br>";
for ($y = 0; $y < $height+1; $y++){
    for ($x = 0; $x < $length; $x++){
    echo $array[$y][$x] . "   ";
    }
    echo '</br>';
}
echo '</br>';

