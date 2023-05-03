<?php

namespace Creational\FactoryMethod\Task7;
require_once "PizzaInterface.php";

class HawaiianPizza implements PizzaInterface
{
    private $type = "Hawaiian Pizza";

    public function PreparePizza()
    {
        return "Preparing Hawaiian Pizza";
    }

    public function bakePizza()
    {
        return "Baking Hawaiian Pizza";
    }

    public function ServePizza()
    {
        return "Serving Hawaiian Pizza";
    }
}