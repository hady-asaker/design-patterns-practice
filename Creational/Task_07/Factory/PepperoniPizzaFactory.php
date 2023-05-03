<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaFactory.php";
// require_once "../PepperoniPizza.php";

class PepperoniPizzaFactory implements PizzaFactory
{
    public function BuildPizza() :PepperoniPizza
    {
        return new PepperoniPizza();
    }
}