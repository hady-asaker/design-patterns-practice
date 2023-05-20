<?php

namespace Behavioral\State\Task18;
require_once "PendingState.php";
require_once "CancelledState.php";
require_once "ShippedState.php";
require_once "CompletedState.php";

class Order
{
    private $State;
    
    public function __construct()
    {
        $this->State = new PendingState();
    }
    
    public function setState(State $state)
    {
        $this->State = $state;
        return $this->State;
    }
    
    public function placeOrder()
    {
        $this->State->placeOrder();
        return $this->setState(new PendingState());
    }
    
    public function cancelOrder()
    {
        $this->State->cancelOrder();
        return $this->setState(new CancelledState());
    }
    
    public function shipOrder()
    {
        if ($this->State == new PendingState) 
        {
            $this->State->shipOrder();
            return $this->setState(new ShippedState());
        }
        else {
            echo "Place Order First";
        }
    }

    public function completeOrder()
    {
        if ($this->State) 
        {
            $this->State->completeOrder();
            return $this->setState(new CompletedState());
        }
        else {
            echo "Ship Order First";
        }
    }

}

$order = new Order();
$order->placeOrder();
echo "<br>";
$order->shipOrder();
echo "<br>";
$order->completeOrder();
