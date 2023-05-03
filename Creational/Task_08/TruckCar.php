<?php

namespace Creational\FactoryMethod\Task8;
require_once "CarInterface.php";

class TruckCar implements CarInterface
{
    public $type;

    public function Assembling()
    {
        return "Assembling Truck-Car";
    }
    public function Testing()
    {
        return "Testing Truck-Car";
    }
    public function Delivering()
    {
        return "Delivering Truck-Car";
    }
}
