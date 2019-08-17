<?php

printf("Input number of grade: ");
fscanf(STDIN, "%d", $number_of_grade);

// $grade_criterias = array('A' => 80, 'B' => 70, 'C' => 60, 'D' => 50, 'F' => 0);

$grade_criterias = array();
printf("Input grade data from max to min \n");
for ($i = 0; $i < $number_of_grade; $i++) {
    printf("\t%d: Input grade data from (grade min_score): ", $i + 1);
    fscanf(STDIN, "%s %d", $grade, $min_score);

    $grade_criterias[$grade] = $min_score;
}

$scores = array();
$i = 0;
while (true) {
    printf("Input score %d ('e' for end of data): ", $i + 1);
    fscanf(STDIN, "%s", $score);

    if ($score == 'e') break;

    $scores[] = $score;
    foreach ($grade_criterias as $key => $value) {
        if ($score >= $value) {
            printf("Grade is %s\n", $key);
            break;
        }
    }

    $i++;
}

printf("The average score for ");
for ($i = 0; $i < count($scores); $i++) {
    printf("%.2f", $scores[$i]);

    if ($i < count($scores) - 2) printf(", ");
    else if ($i == count($scores) - 2) printf(" and ");
}

printf(" = %.2f", array_sum($scores) / count($scores));
