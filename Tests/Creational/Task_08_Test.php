<?php

namespace Test;
require_once "./Creational/Task_08/Factory/SedanCarFactory.php";
require_once "./Creational/Task_08/SedanCar.php";
require_once "./Creational/Task_08/Factory/SUVCarFactory.php";
require_once "./Creational/Task_08/SUVCar.php";
require_once "./Creational/Task_08/Factory/TruckCarFactory.php";
require_once "./Creational/Task_08/TruckCar.php";


use Creational\FactoryMethod\Task8\SedanCar;
use Creational\FactoryMethod\Task8\SedanCarFactory;
use Creational\FactoryMethod\Task8\SUVCar;
use Creational\FactoryMethod\Task8\SUVCarFactory;
use Creational\FactoryMethod\Task8\TruckCar;
use Creational\FactoryMethod\Task8\TruckCarFactory;
use PHPUnit\Framework\TestCase;

class Task_08_Test extends TestCase
{
    public function testCanCreateSedanCar()
    {
        $Factory = new SedanCarFactory();
        $mySedanCar = $Factory->CreateCar();

        $this->assertInstanceOf(SedanCar::class, $mySedanCar);
    }

    public function testCanCreateSUVCar()
    {
        $Factory = new SUVCarFactory();
        $mySUVCar = $Factory->CreateCar();

        $this->assertInstanceOf(SUVCar::class, $mySUVCar);
    }

    public function testCanCreateTruckCar()
    {
        $Factory = new TruckCarFactory();
        $myTruckCar = $Factory->CreateCar();

        $this->assertInstanceOf(TruckCar::class, $myTruckCar);
    }
}
