<?php

class BankAccount
{
    private float $balance;

    // Конструктор
    public function __construct(float $initialBalance)
    {
        if ($initialBalance < 0) {
            throw new InvalidAmountException("Initial balance cannot be negative.");
        }
        $this->balance = $initialBalance;
    }

    // Метод для получения текущего баланса
    public function getBalance(): float
    {
        return $this->balance;
    }

    // Метод для внесения депозита
    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidAmountException("Deposit amount must be greater than zero.");
        }
        $this->balance += $amount;
    }

    // Метод для снятия средств
    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidAmountException("Withdrawal amount must be greater than zero.");
        }

        if ($amount > $this->balance) {
            throw new InsufficientFundsException("Insufficient funds for this withdrawal.");
        }

        $this->balance -= $amount;
    }
}
