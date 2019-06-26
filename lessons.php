<?php

function minusPower($a, $b)
{
    $power = 1;

    for($findPower = 1; $findPower <= -$b; $findPower++)
    {
        $power = 1 / ($a);
    }

    return $power;
}

echo minusPower(10, -1);