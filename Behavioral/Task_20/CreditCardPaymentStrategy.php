<?php

namespace Behavioral\Strategy\Task20;
require_once "PaymentStrategyInterface.php";

class CreditCardPaymentStrategy implements PaymentStrategyInterface
{
    public function pay(int $amount)
    {
        return "Paying with credit card - $amount$";
    }
}
