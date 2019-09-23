<?php

$base1 = $_SERVER['argv'][1];
$base2 = $_SERVER['argv'][2];
$n1 = $_SERVER['argv'][3];
$n2 = $_SERVER['argv'][4];
$n3 = $_SERVER['argv'][5];

function calculate($base1, $base2, $n1, $n2, $n3)
{
    $poweredBase1 = power($base1, $n1);
    $poweredBase2 = power($base2, $n2);

    $poweredSum = $poweredBase1 + $poweredBase2;

    return power($poweredSum, $n3);
}

function power($base, $exponent)
{
    $accumulated = 1;
    for ($i = 1; $i <= $exponent; $i++) {
        $accumulated = $accumulated * $base;
    }

    return $accumulated;
}

echo calculate($base1, $base2, $n1, $n2, $n3);
