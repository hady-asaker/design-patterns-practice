<?php

namespace Behavioral\Iterator\Task6;
require_once "ShoppingCart.php";

use Iterator;

class PriceIterator implements Iterator
{
    private ShoppingCart $shoppingCart;
    private array $sortedItems = [];
    private $position = 0;
    private $TotalPrice = 0;

    public function __construct(ShoppingCart $shoppingCart) 
    {
        $this->shoppingCart = $shoppingCart;
        $this->sortItems();
    }

    public function current() :mixed
    {
        if ($this->valid())
        {
            return $this->sortedItems[$this->position];
        }
        else {
            echo "No More Items";
        }
    }
    public function next() :void
    {
        if ($this->valid())
        {
            ++$this->position;
        }
        else {
            echo "No More Items";
        } 
    }
    public function key() :mixed
    {
        return $this->position;
    }
    public function valid() :bool
    {
        return isset($this->sortedItems[$this->position]);
    }
    public function rewind() :void
    {
        $this->position = 0;
    }
    private function sortItems()
    {
        $items = [];
        foreach ($this->shoppingCart->returnAllItems() as $item)
        {
            $items[$item->getPrice()] = $item;
        }
        ksort($items, SORT_DESC);
        $this->sortedItems = array_values($items);
    }
    public function calculateTotalPrice()
    {
        foreach ($this->shoppingCart->returnAllItems() as $item)
        {
            $this->TotalPrice += ($item->getPrice() * $item->getQuantity());
        }
        return $this->TotalPrice;
    }
}

$item1 = new Item("aaa", 10, 1);
$item2 = new Item("bbb", 20, 17);
$item3 = new Item("ccc", 30, 5);
$item4 = new Item("ddd", 40, 8);

$shoppingCart = new ShoppingCart();
$shoppingCart->addItem($item2);
$shoppingCart->addItem($item1);
$shoppingCart->addItem($item4);
$shoppingCart->addItem($item3);

$item5 = new Item("aaa", 10, 4);
$shoppingCart->addItem($item5);


$iterator = new PriceIterator($shoppingCart);

foreach ($iterator as $item) 
{
    echo $item->getName() . " => " . $item->getPrice() . " => " . $item->getQuantity() . "<br>";
}

echo "Total Price : " . $iterator->calculateTotalPrice();