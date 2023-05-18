<?php

namespace test;
require_once "./Behavioral/Task_13/StockMarket.php";

use Behavioral\Observer\Task13\AmazonStockPriceDisplay;
use Behavioral\Observer\Task13\AppleStockPriceDisplay;
use Behavioral\Observer\Task13\GoogleStockPriceDisplay;
use Behavioral\Observer\Task13\StockMarket;
use PHPUnit\Framework\TestCase;

class Task_13_Test extends TestCase
{
    public function testObserver()
    {
        $stockMarket = new StockMarket();
        $appleStockPrice = new AppleStockPriceDisplay();
        $googleStockPrice = new GoogleStockPriceDisplay();
        $amazonStockPrice = new AmazonStockPriceDisplay();

        $stockMarket->Register($appleStockPrice);
        $stockMarket->Register($googleStockPrice);
        $stockMarket->Register($amazonStockPrice);

        $stockMarket->changeStocksPrice(50, 80, 70);

        $appleStockState = $appleStockPrice->getState();
        $googleStockState = $googleStockPrice->getState();
        $amazonStockState = $amazonStockPrice->getState();

        $this->assertEquals("Apple stock Price Updated To: 70", $appleStockState);
        $this->assertEquals("Google stock Price Updated To: 80", $googleStockState);
        $this->assertEquals("Amazon stock Price Updated To: 50", $amazonStockState);
    }
}
