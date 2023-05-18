<?php

namespace Behavioral\Observer\Task13;
require_once "SubjectInterface.php";
require_once "AppleStockPriceDisplay.php";
require_once "GoogleStockPriceDisplay.php";
require_once "AmazonStockPriceDisplay.php";

class StockMarket implements SubjectInterface
{
    private $Observers = [];
    private $AppleStockPrice = 50;
    private $GoogleStockPrice = 50;
    private $AmazonStockPrice = 50;

    public function Register(ObserverInterface $Observer)
    {
        $index = array_search($Observer, $this->Observers);
        if ($index === false) {
            $this->Observers[] = $Observer;
        }
        else { echo "Exists"; }
    }

    public function Remove(ObserverInterface $Observer)
    {
        $index = array_search($Observer, $this->Observers);
        if ($index !== false) {
            unset($this->Observers[$index]);
        }
        else { echo "Not Found"; }
    }

    public function Notify()
    {
        foreach ($this->Observers as $observer) 
        {
            $observer->Update($this);
        }
    }

    public function changeStocksPrice($AmazonStockPrice, $GoogleStockPrice, $AppleStockPrice)
    {
        $this->AmazonStockPrice = $AmazonStockPrice;
        $this->GoogleStockPrice = $GoogleStockPrice;
        $this->AppleStockPrice = $AppleStockPrice;
        $this->Notify();
    }
    public function getAmazonStockPrice()
    {
        return $this->AmazonStockPrice;
    }
    public function getGoogleStockPrice()
    {
        return $this->GoogleStockPrice;
    }
    public function getAppleStockPrice()
    {
        return $this->AppleStockPrice;
    }

}

$stockMarket = new StockMarket();
$appleStockPrice = new AppleStockPriceDisplay();
$googleStockPrice = new GoogleStockPriceDisplay();
$amazonStockPrice = new AmazonStockPriceDisplay();

$stockMarket->Register($appleStockPrice);
$stockMarket->Register($googleStockPrice);
$stockMarket->Register($amazonStockPrice);

$stockMarket->changeStocksPrice(50, 80, 70);

echo $appleStockPrice->getState() . "<br>";
echo $googleStockPrice->getState() . "<br>";
echo $amazonStockPrice->getState() . "<br>";