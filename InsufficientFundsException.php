<?php

class InsufficientFundsException extends \Exception
{
    // Конструктор для кастомизации сообщения исключения
    public function __construct($message = "Insufficient funds.", $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
