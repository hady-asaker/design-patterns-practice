<?php

namespace Behavioral\Iterator\Task6;
require_once "Item.php";

class ShoppingCart
{
    private $Items = [];

    public function addItem(Item $item)
    {
        foreach ($this->Items as $Xitem) 
        {
            if ($item->getName() == $Xitem->getName() && $item->getPrice() == $Xitem->getPrice()) 
            {
                echo "Item [".$item->getName()."] Exists" . "<br>";
                $Xitem->setQuantity($Xitem->getQuantity() + $item->getQuantity());
                return;
            }
        }
        $this->Items[] = $item;
    }

    public function removeItem($itemName)
    {
        foreach ($this->Items as $key => $value) 
        {
            if ($value->getName() == $itemName) 
            {
                unset($this->Items[$key]);
                echo "Item [$itemName] Removed";
            }
            else {
                echo "Item [$itemName] Not Found";
            }
            break;
        }
    }
    public function returnAllItems()
    {
        return $this->Items;
    }
    public function getIterator()
    {
        return new PriceIterator($this);
    }
}

