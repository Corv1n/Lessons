<?php

//написать функцию, которая принимает некое число и умножает его цифры

function mDigits($input)
{
    $input = (string)$input;
    $mul = strlen($input);

    $j = 1;

    for ($i = 0; $i < $mul; $i++)
    {
        $j = $j * $input[$i]; // [$i] - взятие значения по индексу i;
    }
    return $j;
}

echo mDigits(7686867);
