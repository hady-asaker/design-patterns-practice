<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaInterface.php";

class PepperoniPizza implements PizzaInterface
{
    private $type = "Pepperoni Pizza";

    public function PreparePizza()
    {
        return "Preparing Pepperoni Pizza";
    }

    public function bakePizza()
    {
        return "Baking Pepperoni Pizza";
    }

    public function ServePizza()
    {
        return "Serving Pepperoni Pizza";
    }
}