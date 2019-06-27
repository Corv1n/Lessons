<?php


function positive($int, $power)
{
    if ($int <= 0) {
        throw new Exception("Only positive ints here");
    }

    $ret = 1;

    for ($i = 1; $i <= $power; $i++) {
        $ret = $ret * $int;
    }

    return $ret;
}

function negative($int, $power)
{
    if ($int >= 0) {
        throw new Exception("Only negative ints here");
    }

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