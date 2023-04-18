<?php

/*
Определить, является ли число 2n m симметричным, т. е. запись числа содержит четное
количество цифр и совпадают его левая и правая половинки.
*/

function determinant (int $number)
{

    if($number < 0){
        return' не';
    }
    $count       = 0;
    $cloneNumber = $number;

    while($cloneNumber > 0){
        $count++;
        $cloneNumber = (int)($cloneNumber / 10);
    }

    if($count % 2 == 0){
    
        $halfCount = $count / 2;
        $cloneNumber = $number;

        for($i = 1; $i <= $halfCount; $i++){

            $leftPosition  = 10 ** ($count - $i);

            if((int)($number / $leftPosition) == ($cloneNumber % 10)){
                $number = $number % $leftPosition;
                $cloneNumber = (int)($cloneNumber / 10);
                continue;
            } else {
                return ' не';
            }
        }
    } else {
        return ' не';
    }
    
    return '';
}

$number       = rand();

echo 'Сгенерированное число n:' . "<br>" . $firstNumber . "<br>";
echo 'Сгенерированное число m:' . "<br>" . $secondNumber . "<br>";
echo 'Число 2n+m = ' . $number . determinant($number) . ' является симметричным';
