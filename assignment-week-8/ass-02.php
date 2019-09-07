<?php
$input = fopen($_SERVER['argv'][1], "r");
fscanf($input, "%d", $size);

for ($i = 0; $i < $size; $i++) {
    $data[$i]  =  fscanf($input, trim(str_repeat("%f ", $size)));
}

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        printf("%d\t", $data[$i][$j]);
    }

    printf("\n");
}

if (is_magic_sqrt($data, $size)) {
    $intital_magic_constants = array_sum($data[0]);
    printf("The square is magic square and magic constant is %d", $intital_magic_constants);
} else {
    printf("The square is not magic square!!!");
}

function flatten($array, $size)
{
    $flatted_array = array();

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $flatted_array[] = $array[$i][$j];
        }
    }

    return $flatted_array;
}

function is_magic_sqrt($array, $size)
{
    $sqrt_sum = sqrt_sum($array, $size);

    $every_side_is_equal = $sqrt_sum['primary_diagonal'] == $sqrt_sum['secondary_diagonal'] &&
                           $sqrt_sum['primary_diagonal'] == $sqrt_sum['vertical'] &&
                           $sqrt_sum['primary_diagonal'] == $sqrt_sum['horizontal'];

    $array_is_distinct = count(array_unique(flatten($array, $size))) == $size * $size;

    return  $every_side_is_equal && $array_is_distinct;
}

function sqrt_sum($array, $size)
{
    $primary_sum = 0;
    $secondary_sum = 0;

    for ($i = 0; $i < $size; $i++) {
        $vertical_sum = array_sum(array_column($array, $i));
        $horizontal_sum = array_sum($array[$i]);

        $primary_sum += $array[$i][$i];
        $secondary_sum += $array[$i][$size - $i - 1];
    }

    return [
        'primary_diagonal' => $primary_sum,
        'secondary_diagonal' => $secondary_sum,
        'vertical' => $vertical_sum,
        'horizontal' => $horizontal_sum,
    ];
}


