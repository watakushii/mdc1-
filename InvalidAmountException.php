<?php

class InvalidAmountException extends \Exception
{
    // Конструктор для кастомизации сообщения исключения
    public function __construct($message = "Invalid amount provided.", $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
