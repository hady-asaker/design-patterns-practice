<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaInterface.php";

class MargheritaPizza implements PizzaInterface
{
    private $type = "Margherita Pizza";

    public function CreatePizza()
    {
        return "Margherita Pizza";
    }
}