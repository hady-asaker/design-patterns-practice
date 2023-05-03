<?php

namespace Creational\FactoryMethod\Task9;
require_once "CoffeeMaker.php";

class LatteMaker extends CoffeeMaker
{
    public function MakeCoffee()
    {
        return new Latte();
    }
}
