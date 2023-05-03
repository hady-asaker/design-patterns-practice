<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaInterface.php";

class PepperoniPizza implements PizzaInterface
{
    private $type = "Pepperoni Pizza";

    public function CreatePizza()
    {
        return "Pepperoni Pizza";
    }
}