<?php declare(strict_types = 0);
//считает количество повторяющихся символов в строке

function findSymbol(string $input, string $char)
{
    $j = 0;
    $count = strlen($input);

    for ($i = 0; $i < $count; $i++)
    {
        if($input[$i] == $char)
        {
            $j = $j + 1;
        }
    }
    return $j;

}
echo findSymbol("TEST", 3);


