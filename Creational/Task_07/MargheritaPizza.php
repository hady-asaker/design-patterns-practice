<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaInterface.php";

class MargheritaPizza implements PizzaInterface
{
    private $type = "Margherita Pizza";

    public function PreparePizza()
    {
        return "Preparing Margherita Pizza";
    }

    public function bakePizza()
    {
        return "Baking Margherita Pizza";
    }

    public function ServePizza()
    {
        return "Serving Margherita Pizza";
    }
}