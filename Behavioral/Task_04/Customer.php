<?php

namespace Behavioral\Command\Task4;
require_once "OrderHandler.php";

class Customer 
{
    private $orderHandler;

    public function __construct(OrderHandler $orderHandler) 
    {
        $this->orderHandler = $orderHandler;
    }

    public function placeOrder($order) 
    {
        $Restaurant = new Restaurant();

        if ($Restaurant->CheckOrder($order)) 
        {
            $command = new OrderCommand($Restaurant);
            $this->orderHandler->setCommand($command);
            $this->orderHandler->run();
            return true;
        }
        else {
            echo "This Order Not Found";
            return false;
        }
    }
}
$orderHandler = new OrderHandler();
$customer = new Customer($orderHandler);
$customer->placeOrder("Steak");
// $customer->placeOrder("soup");      // Not Found Order
