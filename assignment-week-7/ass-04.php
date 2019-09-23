<?php
$file_name = $_SERVER['argv'][1];

$input = fopen($file_name, "r");
fscanf($input, "%d", $number_of_data);

function power($base, $exponent)
{
    $accumulated = 1;
    for ($i = 1; $i <= $exponent; $i++) {
        $accumulated = $accumulated * $base;
    }

    return $accumulated;
}


$data = [];
for ($i = 0; $i < $number_of_data; $i++) {
    fscanf($input, "%d %d", $base, $exponent);
    $data[] = ['base' => $base, 'exponent' => $exponent];
}

$accumulated = 0;
foreach ($data as $pair) {
    $accumulated = power($accumulated - $pair['base'], $pair['exponent']);
}

echo $accumulated;
