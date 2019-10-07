<?php
$input = fopen($_SERVER['argv'][1], "r");

$paragraph = '';
while (!(feof($input))) {
    $paragraph .= fgets($input);
}

$sentences = explode(". ", $paragraph);

foreach ($sentences as $sentence) {
    $cleaned_sentence = trim(str_replace(["\n", "\r", "."], "", $sentence));

    echo $cleaned_sentence . ".\n";
}
