<?php

$input = fopen($_SERVER['argv'][1], "r");

fscanf($input, "%d", $n);

for ($i = 0; $i < $n; $i++) {
    fscanf($input, "%s %d", $name, $number);
    printf("%5s: ", $name);

    for ($j = 0; $j < $number; $j++) {
        printf("*");
    }

    printf("\n");
}
