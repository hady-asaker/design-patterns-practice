<?php

namespace Creational\FactoryMethod\Task9;
require_once "CoffeeInterface.php";

class Cappuccino implements CoffeeInterface
{
    private $type = "Cappuccino";

    public function Brewing()
    {
        return "Brewing-Cappuccino";
    }
    public function AddMilk()
    {
        return "Adding Milk To Cappuccino";
    }
    public function AddSugar()
    {
        return "Adding Sugar To Cappuccino";
    }
    public function ServingCoffee()
    {
        return "Serving-Cappuccino";
    }

}
