<?php

function userStrRev(string $input)
{
    $len = strlen($input);
    $result = "";

    //strlen($input) = длина строки $input (например 4)
    for ($i = $len; $i > 0; $i--) {
        //Если $input = "tabc" - то $input[0] - это t, $input[2] - b
        $result = $result . $input[$i-1];
    }

    return $result;
}

echo(userStrRev("Armen"));