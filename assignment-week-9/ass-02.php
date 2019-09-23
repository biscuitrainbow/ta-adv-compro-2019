<?php
$input = fopen($_SERVER['argv'][1], "r");

$paragraph = '';
while (!(feof($input))) {
    $paragraph .= fgets($input);
}

$sentences = explode(".", $paragraph);

foreach ($sentences as $key => $sentence) {
    echo str_replace(["\n", "\r"], "", $sentence) . "\n";
}
