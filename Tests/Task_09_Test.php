<?php

namespace Test;
require_once "./Creational/Task_09/CoffeeShop/CoffeeMaker.php";
require_once "./Creational/Task_09/Espresso.php";
require_once "./Creational/Task_09/Latte.php";
require_once "./Creational/Task_09/Cappuccino.php";

use Creational\FactoryMethod\Task9\Cappuccino;
use Creational\FactoryMethod\Task9\CappuccinoMaker;
use Creational\FactoryMethod\Task9\Espresso;
use Creational\FactoryMethod\Task9\EspressoMaker;
use Creational\FactoryMethod\Task9\Latte;
use Creational\FactoryMethod\Task9\LatteMaker;
use PHPUnit\Framework\TestCase;

class Task_09_Test extends TestCase
{
    public function testCanMakeEspresso()
    {
        $EspressoMaker = new EspressoMaker();
        $MyCoffee = $EspressoMaker->MakeCoffee();

        $this->assertInstanceOf(Espresso::class, $MyCoffee);
    }

    public function testCanMakeLatte()
    {
        $LatteMaker = new LatteMaker();
        $MyCoffee = $LatteMaker->MakeCoffee();

        $this->assertInstanceOf(Latte::class, $MyCoffee);
    }

    public function testCanMakeCappuccino()
    {
        $CappuccinoMaker = new CappuccinoMaker();
        $MyCoffee = $CappuccinoMaker->MakeCoffee();

        $this->assertInstanceOf(Cappuccino::class, $MyCoffee);
    }
}
