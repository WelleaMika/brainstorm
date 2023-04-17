<?php

//Определить количество цифр, меньших 5, используемых при записи натурального числа N.

function determinant (int $number)
{
    
    $number = abs($number);
    $count = 0;
    
    while ($number > 0) {
        if(($number % 10) < 5) {
            $count++;
        }
        $number = (int) ($number / 10);
    }
    return $count;
}

$number = rand();

echo 'Сгенерированное число:' . "<br>" . $number . "<br>";
echo 'Количество цифр, меньших 5:' . "<br>" . determinant($number);

