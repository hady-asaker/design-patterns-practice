<?php

namespace Creational\FactoryMethod\Task9;
require_once "CoffeeInterface.php";

class Latte implements CoffeeInterface
{
    private $type = "Latte";

    public function Brewing()
    {
        return "Brewing-Latte";
    }
    public function AddMilk()
    {
        return "Adding Milk To Latte";
    }
    public function AddSugar()
    {
        return "Adding Sugar To Latte";
    }
    public function ServingCoffee()
    {
        return "Serving-Latte";
    }

}
