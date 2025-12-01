<?php
    require_once "BankAccount.php";
    $account = new BankAccount("davs brochaco", 10000);
    $account->printInfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bank</title>
</head>
<body>
    <br>
    <br><label for="amount">enter amount:</label>
    <input type="value" id="amount" name="amount">
    <button function="deposit($amount)">Deposit</button>
    <button function="withdraw($amount)">Withdraw</button>
    
</body>
</html>