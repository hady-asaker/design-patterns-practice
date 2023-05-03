<?php

namespace Creational\FactoryMethod\Task8;
require_once "CarFactory.php";

class SedanCarFactory extends CarFactory
{
    public function CreateCar(){

        return new SedanCar();

    }
}
