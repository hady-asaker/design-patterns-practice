<?php

namespace Creational\FactoryMethod\Task9;
require_once "CoffeeInterface.php";

class Espresso implements CoffeeInterface
{   
    private $type = "Espresso";

    public function Brewing()
    {
        return "Brewing-Espresso";
    }
    public function AddMilk()
    {
        return "Adding Milk To Espresso";
    }
    public function AddSugar()
    {
        return "Adding Sugar To Espresso";
    }
    public function ServingCoffee()
    {
        return "Serving-Espresso";
    }

}

