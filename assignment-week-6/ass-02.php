<?php
define("INDEX_MAX", 1);
define("INDEX_OUTPUT_FILE", 2);

$max = $_SERVER['argv'][INDEX_MAX];
$output = isset($_SERVER['argv'][INDEX_OUTPUT_FILE])  ? fopen($_SERVER['argv'][INDEX_OUTPUT_FILE], "w+") : STDOUT;

for ($i = 1; $i <= 12; $i++) {
    for ($j = 2; $j <= $max; $j++) {
        fprintf($output, "\t%d", $i * $j);
    }
    fprintf($output, "\n");
}

