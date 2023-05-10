<?php

namespace Test;
require_once "./Structural/Task_17/CarBuilder.php";
use PHPUnit\Framework\TestCase;
use Structural\FluentBuilder\Task17\CarBuilder;

class Task_17_Test extends TestCase
{
    public function testCanBuildCar()
    {
        $car = new CarBuilder();

        $car->setMake("Benz");
        $car->setModel("C-180");
        $car->setEngine("Aspirated-V8");
        $car->setTransmission("9-Speed Automatic");
        $car->setColor("White");

        $myCar = $car->Build();
        $this->assertEquals("You Make [ Benz ] Car Its Model is [ C-180 ] And Its Engine is [ Aspirated-V8 ] With Transmission [ 9-Speed Automatic ] And Color [ White ]", $myCar);
    }
}
