<?php

namespace Behavioral\Observer\Task13;
require_once "ObserverInterface.php";

class GoogleStockPriceDisplay implements ObserverInterface
{
    private $state;

    public function update(SubjectInterface $subject)
    {
        /** @var StockMarket $subject */
        $price = $subject->getGoogleStockPrice();
        $this->state = "Google stock Price Updated To: $price";        
    }

    public function getState()
    {
        return $this->state;
    }
}
