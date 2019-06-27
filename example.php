<?php


function positive($int, $power)
{
    $ret = 1;

    for ($i = 1; $i <= $power; $i++) {
        $ret = $ret * $int;
    }

    return $ret;
}

function negative($int, $power)
{
    return 1 / positive($int, $power);
}

function power($int, $power)
{
    if ($int == 0) {
        return 1;
    }

    if ($int > 0) {
        return positive($int, $power);
    }

    if ($int < 0) {
        return negative($int, $power);
    }
}