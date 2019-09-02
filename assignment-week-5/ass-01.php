<?php
printf("Input number of data : ");
fscanf(STDIN, "%d", $number_of_data);

$prefixes = array(0 => "Mr.", 1 => "Miss.");
$genders = array(0 => "Male", 1 => "Female");
$data = array();

for ($i = 0; $i < $number_of_data; $i++) {
    printf("Data %d\n", $i + 1);

    printf("%50s", "Name prefix (0: Mr., 1: Miss.): ");
    fscanf(STDIN, "%d", $prefix);

    printf("%50s", "First Name: ");
    fscanf(STDIN, "%s", $first_name);

    printf("%50s", "Last Name: ");
    fscanf(STDIN, "%s", $last_name);

    printf("%50s", "Gender (0: Male., 1: Female.): ");
    fscanf(STDIN, "%d", $gender);

    printf("%50s", "Phone Number: ");
    fscanf(STDIN, "%s", $phone_number);

    $data[] = [
        'prefix' => $prefix,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'gender' => $gender,
        'phone_number' => $phone_number,
    ];
}

printf("----------------------------------------------------\n");

for ($i = 0; $i < $number_of_data; $i++) {
    $prefix = $prefixes[$data[$i]['prefix']];
    $full_name = $data[$i]['first_name'] . " " . $data[$i]['last_name'];

    printf("%s %s\n", $prefix, $full_name);
    printf("Gender: %s\n", $genders[$data[$i]['gender']]);
    printf("Phone Number: %s\n", $data[$i]['phone_number']);

    printf("----------------------------------------------------\n");
}
