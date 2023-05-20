<?php

namespace Test;
require_once "./Behavioral/Task_18/Order.php";

use Behavioral\State\Task18\CompletedState;
use Behavioral\State\Task18\Order;
use Behavioral\State\Task18\PendingState;
use Behavioral\State\Task18\ShippedState;
use PHPUnit\Framework\TestCase;

class Task_18_Test extends TestCase
{
    public function testAyHaga()
    {
        $order    = new Order();
        $place    = $order->placeOrder();
        $ship     = $order->shipOrder();
        $complete = $order->completeOrder();

        $this->assertInstanceOf(PendingState::class, $place);
        $this->assertInstanceOf(ShippedState::class, $ship);
        $this->assertInstanceOf(CompletedState::class, $complete);
    }
}
