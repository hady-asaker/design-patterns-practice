<?php

namespace Test;
require_once "./Structural/Task_12/Mushroom.php";

use PHPUnit\Framework\TestCase;
use Structural\Decorator\Task12\Cheese;
use Structural\Decorator\Task12\Mushroom;
use Structural\Decorator\Task12\Pepperoni;
use Structural\Decorator\Task12\PlainPizza;

class Task_12_Test extends TestCase
{
    public function testAddingOneToPizza()
    {
        $pizza = new PlainPizza();
        $PizzaWithMushroom = new Mushroom($pizza);

        $myPizza = $PizzaWithMushroom->getDescription();
        $cost = $PizzaWithMushroom->getCost();

        $this->assertEquals("Plain Pizza, Mushroom", $myPizza);
        $this->assertEquals($cost, 15 + 10);
    }

    public function testAddingMultipleToPizza()
    {
        $pizza = new PlainPizza();
        $MixedPizza = new Mushroom($pizza);
        $MixedPizza = new Cheese($MixedPizza);
        $MixedPizza = new Pepperoni($MixedPizza);
        
        $myPizza = $MixedPizza->getDescription();
        $cost = $MixedPizza->getCost();
        
        $this->assertEquals("Plain Pizza, Mushroom, Cheese, Pepperoni", $myPizza);
        $this->assertEquals($cost, 15 + 10 + 5 + 8);
    
    }
}
