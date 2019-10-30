<?php
require_once('./PetLover.php');
require_once('./Pet.php');


$input = STDIN;
if ($_SERVER['argc'] > 1) {
    $input = fopen($_SERVER['argv'][1], "r");
}

printf("Input pet lover name: ");
fscanf($input, "%s", $owner_name);
$owner = new PetLover($owner_name);

printf("Input number of pet: ");
fscanf($input, "%d", $number_of_pet);
for ($i = 0; $i < $number_of_pet; $i++) {
    printf("Input pet %d name: ", $i + 1);
    fscanf($input, "%s", $pet_name);

    $pet = new Pet($pet_name);
    $owner->addPet($pet);
}

while (true) {
    printf("command (h for help): ");
    $commands = fscanf($input, "%s %s");

    if ($commands[0] == 't') {
        $petName = $commands[1];
        $owner->takePet($petName);
    } else if ($commands[0] == 're') {
        $owner->releasePet();
    } else if ($commands[0] == 'r') {
        $km = $commands[1];
        $owner->runFor($km);
    } else if ($commands[0] == 'i') {
        $owner->showLongInfo();
    } else if ($commands[0] == 'e') {
        break;
    } else {
        echo <<<EOT
        t take the given pet name
        re release all taken pets
        r run for the given km
        i show information of pet lover and all pets
        e exit
        h print this help\n
EOT;
    }
}
