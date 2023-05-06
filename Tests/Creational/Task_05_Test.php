<?php

namespace Test;
require "./Creational/Task_05/HouseProducer.php";

use Creational\Builder\Task5\ColonialBuilder;
use Creational\Builder\Task5\ColonialHouse;
use Creational\Builder\Task5\HouseProducer;
use Creational\Builder\Task5\RanchBuilder;
use Creational\Builder\Task5\RanchHouse;
use Creational\Builder\Task5\VictorianBuilder;
use Creational\Builder\Task5\VictorianHouse;
use PHPUnit\Framework\TestCase;

class Task_05_Test extends TestCase
{
    public function testCanCreateVictorianHouse()
    {
        $Builder = new VictorianBuilder();
        $HouseProducer = new HouseProducer($Builder);
        $myHouse = $HouseProducer->ProduceHouce();
        
        $this->assertInstanceOf(VictorianHouse::class, $myHouse);
    }

    public function testCanCreateColonialHouse()
    {
        $Builder = new ColonialBuilder();
        $HouseProducer = new HouseProducer($Builder);
        $myHouse = $HouseProducer->ProduceHouce();
        
        $this->assertInstanceOf(ColonialHouse::class, $myHouse);
    }

    public function testCanCreateRanchHouse()
    {
        $Builder = new RanchBuilder();
        $HouseProducer = new HouseProducer($Builder);
        $myHouse = $HouseProducer->ProduceHouce();
        
        $this->assertInstanceOf(RanchHouse::class, $myHouse);
    }
}