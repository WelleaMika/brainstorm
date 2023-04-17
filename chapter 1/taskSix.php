<?php

/* Выяснить, образуют ли цифры данного натурального числа N возрастающую
последовательность. */

function searchGCD (int $firstNumber, int $secondNumber)
{

    $firstNumber  = abs($firstNumber);
    $secondNumber = abs($secondNumber);
    
    while (true) {
        if($firstNumber == $secondNumber) {
            return $firstNumber;
        } else if($firstNumber > $secondNumber) {
            $firstNumber  = $firstNumber  - $secondNumber;
        }else {
            $secondNumber = $secondNumber - $firstNumber;
        }
    }
}

$firstNumber = rand();
$secondNumber = rand();

echo 'Сгенерированное число A:' . "<br>" . $firstNumber . "<br>";
echo 'Сгенерированное число B:' . "<br>" . $secondNumber . "<br>";
echo 'НОД двух чисел:' . "<br>" . searchGCD ($firstNumber, $secondNumber);

