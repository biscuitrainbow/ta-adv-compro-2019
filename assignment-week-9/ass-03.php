<?php
$input = fopen($_SERVER['argv'][1], "r");

$sentence = fgets($input);
$sentence =  str_replace(["My name is", "His name is", "Her name is"], "", $sentence);
$names = explode(". ", $sentence);

foreach ($names as $key => $name) {
    printf("%s\n", ucwords(strtolower(trim($name))));
}
