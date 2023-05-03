<?php

namespace Creational\FactoryMethod\Task9;
require_once "CoffeeMaker.php";

class CappuccinoMaker extends CoffeeMaker
{
    public function MakeCoffee()
    {
        return new Cappuccino();
    }
}
