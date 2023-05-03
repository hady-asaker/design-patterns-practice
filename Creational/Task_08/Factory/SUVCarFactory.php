<?php

namespace Creational\FactoryMethod\Task8;
require_once "CarFactory.php";

class SUVCarFactory extends CarFactory
{
    public function CreateCar(){

        return new SUVCar();

    }
}
