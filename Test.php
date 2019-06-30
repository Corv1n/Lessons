<?php

function positive($int, $pow)
{
    $power = 1;

    for($i = 1; $i <= $pow; $i++)
    {
        $power = $power * $int;
    }

    return $power;
}

function negative($int, $pow)
{
    if($pow < 0)
    {
        return 1 / positive($int, abs($pow));
    }
}

function power($int, $pow)
{
    if($pow == 0)
    {
        return 1;
    }

    if($pow >= 1)
    {
        return positive($int, $pow);
    }

    if($pow < 0)
    {
        return negative($int, $pow);
    }
}

var_dump(power(2, 0));

var_dump(power(2, 2));

var_dump(power(2, -2));