<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaInterface.php";

class HawaiianPizza implements PizzaInterface
{
    private $type = "Hawaiian Pizza";

    public function CreatePizza()
    {
        return "Hawaiian Pizza";
    }
}