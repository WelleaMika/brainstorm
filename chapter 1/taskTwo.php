<?php

/* Выяснить, образуют ли цифры данного натурального числа N возрастающую
последовательность. */

function clarification (int $number)
{
    while ($number > 9)
    {
        $firstDigit = $number % 10;
        $number = (int) ($number / 10);
        if(($number % 10) <= ($firstDigit))
        {
            return 'не ';
        }
    }
    return "";
}

$number = rand();
echo 'Сгенерированное число:' . "<br>" . $number . "<br>";
echo 'Цифры данного натурального числа ' . clarification($number) . 'образуют возрастающую последовательность';

