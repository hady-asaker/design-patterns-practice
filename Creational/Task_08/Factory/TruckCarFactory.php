<?php

namespace Creational\FactoryMethod\Task8;
require_once "CarFactory.php";

class TruckCarFactory extends CarFactory
{
    public function CreateCar(){

        return new TruckCar();
        
    }
}
