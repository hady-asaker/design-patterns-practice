<?php

namespace Behavioral\State\Task18;
require_once "State.php";

class ShippedState implements State
{
    public function placeOrder()
    {
        echo "Order is already shipped";
    }
    
    public function cancelOrder()
    {
        echo "Order is already shipped";
    }
    
    public function shipOrder()
    {
        echo "WTF";
    }
    
    public function completeOrder()
    {
        echo "Completing the order";
    }

}
