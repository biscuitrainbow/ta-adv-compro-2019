<?php
function compare($a, $b)
{
    if ($a['score'] == $b['score']) return 0;

    return $a['score'] > $b['score'] ? -1 : 1;
}

$input = fopen($_SERVER['argv'][1], "r");
$students = array();

fscanf($input, "%d", $number_of_data);
for ($i = 0; $i < $number_of_data; $i++) {
    fscanf($input, "%s %d", $name, $score);
    $students[] = [
        'name' => $name,
        'score' => $score
    ];
}

usort($students, "compare");

foreach ($students as $key => $student) {
    printf("%-5s %-5d\n", $student['name'], $student['score']);
}
