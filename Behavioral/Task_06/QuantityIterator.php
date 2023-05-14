<?php

namespace Behavioral\Iterator\Task6;
require_once "ShoppingCart.php";

use Iterator;

class QuantityIterator implements Iterator
{
    private ShoppingCart $shoppingCart;
    private $position = 0;
    private $ItemsSortedByQuantity = [];
    private $TotalPrice;

    public function __construct(ShoppingCart $shoppingCart) 
    {
        $this->shoppingCart = $shoppingCart;
        $this->SortByQuantity();
    }

    public function current(): mixed
    {
        return $this->ItemsSortedByQuantity[$this->position];
    }
    public function next(): void
    {
        $this->position++;
    }
    public function key(): mixed
    {
        return $this->position;
    }
    public function valid() :bool
    {
        return isset($this->ItemsSortedByQuantity[$this->position]);
    }
    public function rewind() :void
    {
        $this->position = 0;
    }

    private function SortByQuantity()
    {
        $items = [];
        foreach ($this->shoppingCart->returnAllItems() as $item) 
        {
            $items[$item->getQuantity()] = $item;
        }
        ksort($items, SORT_DESC);
        $this->ItemsSortedByQuantity = array_values($items);
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

$iterator = new QuantityIterator($shoppingCart);

foreach ($iterator as $item) 
{
    echo $item->getName() . " => " . $item->getPrice() . " => " . $item->getQuantity() . "<br>";
}

echo "Total Price : " . $iterator->calculateTotalPrice();