<?php

// $students = array(
//     "A" => array("Adam", "Denny"),
//     "B" => array(),
//     "C" => array(),
//     "D" => array('Candy'),
//     "F" => array('Frank', 'Bob')
// );

$students = array(
    "A" => array(),
    "B" => array(),
    "C" => array(),
    "D" => array(),
    "F" => array(),
);

$grades = array("A", "B", "C", "D", "F");
$grade_values =  array("A" => 4, "B" => 3, "C" => 2, "D" => 1, "F" => 0);

$i = 0;
while (true) {
    $name = NULL;
    $grade = NULL;

    printf("Student %d: (name, grade enter for end of data): ", $i++);
    fscanf(STDIN, "%s %s", $name, $grade);

    if ($name == NULL || $grade == NULL) break;

    if (in_array($grade, $grades))  $students[$grade][] = $name;
}

$student_count = 0;
$score_total = 0;

foreach ($grades as $grade) {
    printf("%s (%d) : %s\n", $grade,  count($students[$grade]), implode(", ", $students[$grade]));

    $student_count += count($students[$grade]);
    $score_total += $grade_values[$grade] *  count($students[$grade]);
}


printf("Average Grade Point: %.2f", $score_total / $student_count);
