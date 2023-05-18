<?php

namespace Behavioral\Observer\Task13;
require_once "ObserverInterface.php";

class AppleStockPriceDisplay implements ObserverInterface
{
    private $state;

    public function update(SubjectInterface $subject)
    {
        /** @var StockMarket $subject */
        $price = $subject->getAppleStockPrice();
        $this->state = "Apple stock Price Updated To: $price";
    }

    public function getState()
    {
        return $this->state;
    }
}
