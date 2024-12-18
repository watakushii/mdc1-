<?php

require_once 'InvalidAmountException.php';
require_once 'InsufficientFundsException.php';
require_once 'BankAccount.php';

try {
    // Создание объекта BankAccount с начальным балансом
    $account = new BankAccount(1000);

    // Депозит 500
    $account->deposit(500);
    echo "Balance after deposit: " . $account->getBalance() . "\n";

    // Попытка снятия 2000 (должно выбросить исключение InsufficientFundsException)
    $account->withdraw(2000);
} catch (InvalidAmountException $e) {
    echo "InvalidAmountException: " . $e->getMessage() . "\n";
} catch (InsufficientFundsException $e) {
    echo "InsufficientFundsException: " . $e->getMessage() . "\n";
} catch (\Exception $e) {
    echo "General Exception: " . $e->getMessage() . "\n";
}
