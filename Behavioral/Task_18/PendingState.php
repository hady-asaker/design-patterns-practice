<?php

namespace Behavioral\State\Task18;
require_once "State.php";

class PendingState implements State
{
    public function placeOrder()
    {
        echo "Placing the order";
    }
    
    public function cancelOrder()
    {
        echo "Cancelling the order";
    }
    
    public function shipOrder()
    {
        echo "Shipping the order";
    }
    
    public function completeOrder()
    {
        echo "Completing the order First";
    }
}
