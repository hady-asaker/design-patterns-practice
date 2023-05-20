<?php

namespace Behavioral\Strategy\Task20;
require_once "PaymentStrategyInterface.php";

class BankTransferPaymentStrategy implements PaymentStrategyInterface
{
    public function pay(int $amount)
    {
        return "Transfer $amount$ from your bank account";
    }
}
