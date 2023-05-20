<?php

namespace Test;
require_once "./Behavioral/Task_20/PaymentProcessor.php";

use Behavioral\Strategy\Task20\BankTransferPaymentStrategy;
use Behavioral\Strategy\Task20\CreditCardPaymentStrategy;
use Behavioral\Strategy\Task20\PaymentProcessor;
use Behavioral\Strategy\Task20\PayPalPaymentStrategy;
use PHPUnit\Framework\TestCase;

class Task_20_Test extends TestCase
{
    
    public function testBankAccTransfer()
    {
        $PaymentProcessor = new PaymentProcessor();
        $BankAcc = new BankTransferPaymentStrategy();

        $PaymentProcessor->setPayStrategy($BankAcc);
        $test = $PaymentProcessor->pay(1500);

        $this->assertEquals("Transfer 1500$ from your bank account", $test);
    }

    public function testPayPalPayment()
    {
        $PaymentProcessor = new PaymentProcessor();
        $PayPal = new PayPalPaymentStrategy();

        $PaymentProcessor->setPayStrategy($PayPal);
        $test = $PaymentProcessor->pay(2300);

        $this->assertEquals("Transfer 2300$ from your PayPal account", $test);
    }

    public function testCreditCardPayment()
    {
        $PaymentProcessor = new PaymentProcessor();
        $CreditCard = new CreditCardPaymentStrategy();

        $PaymentProcessor->setPayStrategy($CreditCard);
        $test = $PaymentProcessor->pay(5600);

        $this->assertEquals("Paying with credit card - 5600$", $test);
    }
}
