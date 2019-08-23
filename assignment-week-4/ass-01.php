<?php
define("INDEX_OF_NAME", 0);
define("INDEX_OF_FIRST_SCORE", 1);

/* FOR TESTING PURPOSE
$number_of_student = 3;
$number_of_chapter = 2;

$student_names = array('alex', 'bob', 'candy');
$student_scores = array(
    array(10.5, 20.6),
    array(5.9, 7.8),
    array(15.6, 30.9),
);
*/

printf("Input number of student: ");
fscanf(STDIN, "%d", $number_of_student);

printf("Input number of chapter: ");
fscanf(STDIN, "%d", $number_of_chapter);

$student_names = array();
$student_scores = array();

for ($i = 0; $i < $number_of_student; $i++) {
    printf("Student %d score ( stdname ", $i + 1);
    for ($j = 0; $j < $number_of_chapter; $j++) {
        printf("chpt%d ", $j + 1);
    }
    printf(") :");


    $formated_string = "%s";
    for ($j = 0; $j < $number_of_chapter; $j++) {
        $formated_string = $formated_string . " %f";
    }

    $student_data = fscanf(STDIN, $formated_string);
    $student_names[] = $student_data[INDEX_OF_NAME];
    $student_scores[] = array_slice($student_data, INDEX_OF_FIRST_SCORE);
}

printf("Result:\n");
for ($i = 0; $i < $number_of_student; $i++) {
    printf("%s\t:", $student_names[$i]);
    for ($j = 0; $j < $number_of_chapter; $j++) {
        printf("%10.2f ", $student_scores[$i][$j]);
    }
    printf(" =  %.2f", array_sum($student_scores[$i]));
    printf("\n");
}
