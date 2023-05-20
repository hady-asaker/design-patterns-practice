<?php

namespace Behavioral\State\Task18;
require_once "State.php";

class CancelledState implements State
{
    public function placeOrder()
    {

    }
    
    public function cancelOrder()
    {
        echo "Order cancelled";
    }
    
    public function shipOrder()
    {

    }
    
    public function completeOrder()
    {

    }
}
