<?php

namespace Test;
require_once "./Creational/Task_04/PizzaBuilder.php";
require_once "./Creational/Task_04/Director.php";

use Creational\AbstractFactory\Task4\Pizza;
use Creational\AbstractFactory\Task4\PizzaBuilder;
use Creational\AbstractFactory\Task4\PizzaDirector;
use PHPUnit\Framework\TestCase;

class Task_04_Test extends TestCase
{
    public function testCanCreatePizza()
    {
        $builder = new PizzaBuilder();
        $pizzaDirector = new PizzaDirector($builder);
        $myPizaa = $pizzaDirector->ProducePizza();

        $this->assertInstanceOf(Pizza::class, $myPizaa);
    }
}