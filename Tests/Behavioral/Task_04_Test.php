<?php

namespace Test;
require_once "./Behavioral/Task_04/Customer.php";

use Behavioral\Command\Task4\Customer;
use Behavioral\Command\Task4\OrderCommand;
use Behavioral\Command\Task4\OrderHandler;
use Behavioral\Command\Task4\Restaurant;
use PHPUnit\Framework\TestCase;

class Task_04_Test extends TestCase
{
    private $customer;
    private $orderHandler;
    private $Restaurant;
    private $command;

    public function setUp() :void
    {
        $this->Restaurant = new Restaurant();
        $this->orderHandler = new OrderHandler();
        $this->customer = new Customer($this->orderHandler);
        $this->command = new OrderCommand($this->Restaurant);
    }

    
    public function testOrder()
    {
        $this->orderHandler->setCommand($this->command);
        $this->orderHandler->run();    
        $SuccessOrder = $this->customer->placeOrder("Steak");
        $FailedOrder = $this->customer->placeOrder("Soup");

        $this->assertTrue($SuccessOrder);
        $this->assertFalse($FailedOrder);
    }
}
