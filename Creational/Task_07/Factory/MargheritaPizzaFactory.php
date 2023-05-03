<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaFactory.php";
// require_once "../MargheritaPizza.php";

class MargheritaPizzaFactory implements PizzaFactory
{
    public function BuildPizza() :MargheritaPizza
    {
        return new MargheritaPizza();
    }
}