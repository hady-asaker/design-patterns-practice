<?php

namespace Behavioral\State\Task18;

interface State
{
    public function placeOrder();
    public function cancelOrder();
    public function shipOrder();
    public function completeOrder();
}
