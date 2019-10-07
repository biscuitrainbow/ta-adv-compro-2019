<?php
function compare_product_by_id($a, $b)
{
    $number_a = extract_number_from_id($a['id']);
    $number_b = extract_number_from_id($b['id']);

    return (int) $number_a - (int) $number_b;
}

function extract_number_from_id($id)
{
    return substr($id, 2);
}

// main function
$original_input = fopen($_SERVER['argv'][1], "r");

fscanf($original_input, "%d", $original_n);

$original_products = array();
for ($i = 0; $i < $original_n; $i++) {
    list($id, $name) = fscanf($original_input, "%s %s");

    $original_products[] = [
        'id' => $id,
        'name' => $name
    ];
}

usort($original_products, "compare_product_by_id");

$extended_input = fopen($_SERVER['argv'][2], "r");

$latest_product = $original_products[count($original_products) - 1];
$latest_product_number = (int) substr($latest_product['id'], 2);

fscanf($extended_input, "%d", $extended_n);
for ($i = $latest_product_number + 1; $i < $latest_product_number + $extended_n + 1; $i++) {
    fscanf($extended_input, "%s", $name);

    $original_products[] = [
        'id' => 'PD' . sprintf("%04d", $i),
        'name' => $name,
    ];
}

foreach ($original_products  as $product) {
    printf("%s %s\n", $product['id'], $product['name']);
}
