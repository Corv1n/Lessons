<?php

/**
 * @param $actual
 * @param $expected
 * @throws Exception
 */
function test($actual, $expected)
{
    if ($actual != $expected) {
        echo("Test FAILED, expected {$expected} got {$actual}\n");
    } else {
        echo("Test ${expected} = ${actual} passed OK!\n");
    }
}


// http://www.algebraclass.ru/otricatelnaya-stepen/
function minusPower($a, $b)
{
    $power = 1;

    for ($findPower = 1; $findPower <= -$b; $findPower++) {
        $power = 1 / ($a);
    }

    return $power;
}

//echo minusPower(10, -1);


test(minusPower(0, -1), 1); // один делить на ноль в первой степени, ноль в первой = 1, итого 1 \ 1
test(minusPower(1, -2), 1 / 1 ** 2);
test(minusPower(2, -3), 1 / 2 ** 3);
test(minusPower(3, -4), 1 / 3 ** 4);
test(minusPower(3, -6), 1 / 3 ** 6);
test(minusPower(10, -10), 1 / 10 ** 10);