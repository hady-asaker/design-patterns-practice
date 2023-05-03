<?php

namespace Creational\FactoryMethod\Task9;
require_once "CoffeeMaker.php";

class EspressoMaker extends CoffeeMaker
{
    public function MakeCoffee()
    {
        return new Espresso();
    }
}
