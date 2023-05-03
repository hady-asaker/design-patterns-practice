<?php

namespace Creational\FactoryMethod\Task8;
require_once "CarInterface.php";

class SUVCar implements CarInterface
{
    public $type;

    public function Assembling()
    {
        return "Assembling SUV-Car";
    }
    public function Testing()
    {
        return "Testing SUV-Car";
    }
    public function Delivering()
    {
        return "Delivering SUV-Car";
    }

}
