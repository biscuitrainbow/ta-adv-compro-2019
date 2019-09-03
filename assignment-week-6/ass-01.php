<?php
$file = fopen("ass-01-input.txt", "r");

fscanf($file, "%d", $number_of_data);
printf("number of data %d\n", $number_of_data);

$data = array();
$i  = 0;

while (fscanf($file, "%f", $data[])) {
    printf("data %d = %f\n", ++$i, $data[count($data) - 1]);
}

printf("Average score = %f", array_sum($data) / $number_of_data);

fclose($file);
