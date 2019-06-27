<?php

function power($a, $b)
{
    $power = 1;

    for($findPower = 1; $findPower <= $b; $findPower++)
    {
        $power = $power * $a;
    }

    if($b < 0)
        {
            return power(1 / $a, -$b);
        }

    return $power;
}
echo power(10, -2);