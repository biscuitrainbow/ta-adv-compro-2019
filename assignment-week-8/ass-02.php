<?php
$input = fopen($_SERVER['argv'][1], "r");
fscanf($input, "%d", $size);

for ($i = 0; $i < $size; $i++) {
    $data[$i]  =  fscanf($input, trim(str_repeat("%f ", $size)));
}

// for ($i = 0; $i < $size; $i++) {
//     for ($j = 0; $j < $size; $j++) {
//         printf("%d\t", $data[$i][$j]);
//     }
//     printf("\n");
// }

 
// $intital_magic_constants = array_sum($data[0]);

// for ($i = 0; $i < $size; $i++) {
//     $vertical_sum = array_sum(array_column($data, $i));
//     $horizontal_sum = array_sum($data[$i]);

//     if ($vertical_sum != $intital_magic_constants || $horizontal_sum != $intital_magic_constants) {
//         printf("The square is not magic square!!!\n");
//         break;
//     }
// }


// $primary_diagonal_sum = 0;
// $secondary_diagnoal_sum = 0;

// for ($i = 0; $i < $size; $i++) {
//     for ($j = 0; $j < $size; $j++) {
//         if ($i == $j) $primary_diagonal_sum += $data[$i][$j];
//         if ($i + $j == $size - 1) $secondary_diagnoal_sum += $data[$i][$j];
//     }
// }


// printf("The square is magic square and magic constant is %d", $intital_magic_constants);
