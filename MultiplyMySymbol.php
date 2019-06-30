<?php


function strings(string $input, int $doubles)
{
    $result = "";

    for ($i = 0; $i < strlen($input); $i++) {
        $current = $input[$i];
        $result = $result . str_repeat($current, $doubles);
    }

    return $result;
}

strings("teaas", 2);