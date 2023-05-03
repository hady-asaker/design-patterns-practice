<?php

namespace Creational\FactoryMethod\Task8;
require_once "CarInterface.php";

class SedanCar implements CarInterface
{
    public $type;

    public function Assembling()
    {
        return "Assembling Sedan-Car";
    }
    public function Testing()
    {
        return "Testing Sedan-Car";
    }
    public function Delivering()
    {
        return "Delivering Sedan-Car";
    }

}
