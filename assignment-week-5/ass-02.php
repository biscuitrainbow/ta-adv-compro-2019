<?php
$students = array();

while (true) {
    $name = NULL;
    $grade = NULL;

    printf("Student 1: (name, grade enter for end of data): ");
    fscanf(STDIN, "%s %s", $name, $grade);

    if ($name == NULL || $grade == NULL) break;

    if (in_array($grade, ["A", "B", "C", "D", "F"]))  $students[$grade][] = $name;
}

foreach ($students as $key => $value) {
    printf("%s (%d) %s\n", $key, count($value), implode(", ", $value));
}
