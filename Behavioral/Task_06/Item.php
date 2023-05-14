<?php

namespace Behavioral\Iterator\Task6;

class Item
{
    private $itemName;
    private $price;
    private $quantity;

    public function __construct($itemName, $price, $quantity) 
    {
        $this->itemName = $itemName;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function getName()
    {
        return $this->itemName;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
