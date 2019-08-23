<?php
printf("Input data (floor n): ");
fscanf(STDIN, "%d %d", $number_of_floor, $number_of_zone);

$zones = array();

/* FOR TESTING PURPOSE
$number_of_floor = 3;
$number_of_zone = 2;

$zones = array(
    array(
        array(1, 2),
        array(3, 4),
    ),
    array(
        array(10, 20),
        array(30, 40)
    ),
    array(
        array(100, 200),
        array(300, 400)
    ),
);
*/


for ($i = 0; $i < $number_of_floor; $i++) {
    printf("Floor: %d\n", $i + 1);

    for ($j = 0; $j < $number_of_zone; $j++) {
        for ($k = 0; $k < $number_of_zone; $k++) {
            printf("Input number of person in zone %d-%d: ", $j + 1, $k + 1);
            fscanf(STDIN, "%d", $zones[$i][$j][$k]);
        }
    }
}

printf("\nPerson on each floor:\n");
for ($i = 0; $i < $number_of_floor; $i++) {
    printf("\tFloor: %d\n", $i + 1);

    for ($j = 0; $j < $number_of_zone; $j++) {
        for ($k = 0; $k < $number_of_zone; $k++) {
            printf("\t%5d", $zones[$i][$j][$k]);
        }
        printf("\n");
    }


    $number_of_people = 0;
    for ($j = 0; $j < $number_of_zone; $j++) {
        $number_of_people +=  array_sum($zones[$i][$j]);
    }
    printf("\tNumber of person = %d\n\n", $number_of_people);
}

printf("\nPerson on each zone:\n");
for ($i = 0; $i < $number_of_zone; $i++) {

    for ($j = 0; $j < $number_of_zone; $j++) {
        printf("\tZone %d-%d\n", $i + 1, $j + 1);

        $number_of_people = 0;
        for ($k = $number_of_floor - 1; $k >= 0; $k--) {
            printf("\t%5d\n", $zones[$k][$j][$i]);

            $number_of_people += $zones[$k][$j][$i];
        }
        printf("\n");
        printf("\tNumber of person = %d\n\n", $number_of_people);
    }
}
