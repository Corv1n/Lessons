<?php

// на вход число, возвращать boolean, нужно вернуть True, если число 1 - 120 включительно, остальные False,

function isWowLevel(int $input)
{
    if ($input >= 1) {
        if ($input <= 120) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
var_dump(isWowLevel(0));
var_dump(isWowLevel(1));
var_dump(isWowLevel(121));