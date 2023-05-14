<?php

namespace Test;
require_once "./Behavioral/Task_06/PriceIterator.php";
require_once "./Behavioral/Task_06/QuantityIterator.php";

use Behavioral\Iterator\Task6\Item;
use Behavioral\Iterator\Task6\PriceIterator;
use Behavioral\Iterator\Task6\QuantityIterator;
use Behavioral\Iterator\Task6\ShoppingCart;
use PHPUnit\Framework\TestCase;

class Task_06_Test extends TestCase
{
    public function testPriceIterator()
    {
        $item1 = new Item("aaa", 10, 1);
        $item3 = new Item("ccc", 30, 5);
        $item4 = new Item("ddd", 40, 8);
        $item2 = new Item("bbb", 20, 17);

        $shoppingCart = new ShoppingCart();
        $shoppingCart->addItem($item2);
        $shoppingCart->addItem($item1);
        $shoppingCart->addItem($item4);
        $shoppingCart->addItem($item3);

        $item5 = new Item("aaa", 10, 4);
        $shoppingCart->addItem($item5);

        $iterator = new PriceIterator($shoppingCart);

        $items = [];
        foreach ($iterator as $item) 
        {
            $items[] = $item->getName();
        }
        $this->assertEquals(860, $iterator->calculateTotalPrice());
        $this->assertEquals(['aaa', 'bbb', 'ccc', 'ddd'], $items);
    }

    public function testQuantityIterator()
    {
        $item1 = new Item("aaa", 10, 1);
        $item2 = new Item("bbb", 20, 17);
        $item3 = new Item("ccc", 30, 5);
        $item4 = new Item("ddd", 40, 8);

        $shoppingCart = new ShoppingCart();
        $shoppingCart->addItem($item2);
        $shoppingCart->addItem($item4);
        $shoppingCart->addItem($item1);
        $shoppingCart->addItem($item3);

        $iterator = new QuantityIterator($shoppingCart);

        $items = [];
        foreach ($iterator as $item) 
        {
            $items[] = $item->getName();
        }
        $this->assertEquals(820, $iterator->calculateTotalPrice());
        $this->assertEquals(['aaa', 'ccc', 'ddd', 'bbb'], $items);
    }
}
