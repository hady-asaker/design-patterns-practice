<?php

namespace Structural\Decorator\Task12;
require_once "PizzaComponentInterface.php";

class PlainPizza implements PizzaComponentInterface
{
    public function getCost()
    {
        return 15.0;
    }
    public function getDescription()
    {
        return "Plain Pizza";
    }

}
