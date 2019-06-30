<?php

function doubleString(string $input, int $repeat)
{
    $array = str_split($input);
    $result = "";

    foreach ($array as $value) {
        //$value == S
        //str_repeat($value, $repeat) == "SS" (если $repeat = 2)

        $result = $result . str_repeat($value, $repeat);
    }

    return $result;
}


echo(doubleString("321", 2));