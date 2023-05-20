<?php

namespace Behavioral\Strategy\Task20;
require_once "BankTransferPaymentStrategy.php";
require_once "CreditCardPaymentStrategy.php";
require_once "PayPalPaymentStrategy.php";

class PaymentProcessor
{
    private PaymentStrategyInterface $PayStrategy;

    public function setPayStrategy(PaymentStrategyInterface $PayStrategy)
    {
        $this->PayStrategy = $PayStrategy;
    }

    public function pay(int $amount)
    {
        return $this->PayStrategy->pay($amount);
    }
}

$PaymentProcessor = new PaymentProcessor();

$BankAcc = new BankTransferPaymentStrategy();
$PayPal = new PayPalPaymentStrategy();
$CreditCard = new CreditCardPaymentStrategy();

$PaymentProcessor->setPayStrategy($BankAcc);
echo $PaymentProcessor->pay(852) . "<br>";

$PaymentProcessor->setPayStrategy($PayPal);
echo $PaymentProcessor->pay(693) . "<br>";

$PaymentProcessor->setPayStrategy($CreditCard);
echo $PaymentProcessor->pay(5555) . "<br>";
