<?php

namespace Behavioral\Strategy\Task20;

interface PaymentStrategyInterface
{
    public function pay(int $amount);
}
