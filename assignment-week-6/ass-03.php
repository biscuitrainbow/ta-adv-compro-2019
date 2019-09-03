<?php
$input = STDIN;
$output = STDOUT;

if ($_SERVER['argc'] == 2) {
    $output = fopen($_SERVER['argv'][1], "w+");
}

if ($_SERVER['argc'] == 3) {
    if (!file_exists($_SERVER['argv'][1]) || !$input = fopen($_SERVER['argv'][1], "r")) {
        echo "Invalid arguments\n";
        echo "Cannot open file " . $_SERVER['argv'][1];
        exit(0);
    }

    $output = fopen($_SERVER['argv'][2], "w+");
}

while (fscanf($input, "%[^\n]", $data)) fprintf($output, "%s", $data);
