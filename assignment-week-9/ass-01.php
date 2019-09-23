<?php
$input = fopen($_SERVER['argv'][1], "r");

fscanf($input, "%s %s", $firstname, $lastname);

printf("Transaction for:\n");
printf("%20s: %s\n", "First Name", $firstname);
printf("%20s: %s\n", "Last name", $lastname);

fscanf($input, "%d", $number_of_transaction);
printf("Number of transaction %d:\n", $number_of_transaction);

$balance = 0;

for ($i = 0; $i < $number_of_transaction; $i++) {
    fscanf($input, "%s", $transaction);
    $sign = substr($transaction, 0, 1);
    $amount = substr($transaction, 1);

    printf("%20s: %20s\n", $sign == "+" ? "Deposit" : "Withdraw", number_format($amount, 2));

    if ($sign == "+") {
        $balance += $amount;
    } else {
        $balance -= $amount;
    }
}

printf("Balance: %s", number_format($balance, 2));
