<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaFactory.php";
// require_once "../HawaiianPizza.php";

class HawaiianPizzaFactory implements PizzaFactory
{
    public function BuildPizza() :HawaiianPizza
    {
        return new HawaiianPizza();
    }
}
