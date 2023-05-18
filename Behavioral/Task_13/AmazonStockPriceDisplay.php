<?php

namespace Behavioral\Observer\Task13;
require_once "ObserverInterface.php";

class AmazonStockPriceDisplay implements ObserverInterface
{
    private $state;

    public function update(SubjectInterface $subject)
    {
        /** @var StockMarket $subject */
        $price = $subject->getAmazonStockPrice();
        $this->state = "Amazon stock Price Updated To: $price";        
        
    }

    public function getState()
    {
        return $this->state;
    }
}
