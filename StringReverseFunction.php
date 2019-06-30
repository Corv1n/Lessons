<?php

function userStrRev(string $input)
{
    $len = strlen($input);
    $result = "";

    //strlen($input) = длина строки $input (например 4)
    //Начиниаем с последнего символа и проходим вниз до 1
    for ($i = $len; $i > 0; $i--) {
        $previous = $i - 1;
        $result = $result . $input[$previous];
    }

    return $result;
}


//Armen = 5

//A = 0
//r = 1
//m = 2
//e = 3
//n = 4


echo(userStrRev("Armen"));