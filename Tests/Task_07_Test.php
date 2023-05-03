<?php

namespace Test;
require_once "Creational/Task_07/Factory/HawaiianPizzaFactory.php";
require_once "Creational/Task_07/Factory/MargheritaPizzaFactory.php";
require_once "Creational/Task_07/Factory/PepperoniPizzaFactory.php";
require_once "Creational/Task_07/HawaiianPizza.php";
require_once "Creational/Task_07/MargheritaPizza.php";
require_once "Creational/Task_07/PepperoniPizza.php";

use Creational\FactoryMethod\Task7\HawaiianPizza;
use Creational\FactoryMethod\Task7\HawaiianPizzaFactory;
use Creational\FactoryMethod\Task7\MargheritaPizza;
use Creational\FactoryMethod\Task7\MargheritaPizzaFactory;
use Creational\FactoryMethod\Task7\PepperoniPizza;
use Creational\FactoryMethod\Task7\PepperoniPizzaFactory;
use PHPUnit\Framework\TestCase;

class Task_07_Test extends TestCase
{
    public function testCanCreateHawaiianPizza()
    {
        $newFactory = new HawaiianPizzaFactory();
        $MyPizza = $newFactory->BuildPizza();

        $this->assertInstanceOf(HawaiianPizza::class, $MyPizza);
    }
    public function testCanCreateMargheritaPizza()
    {
        $newFactory = new MargheritaPizzaFactory();
        $MyPizza = $newFactory->BuildPizza();

        $this->assertInstanceOf(MargheritaPizza::class, $MyPizza);
    }
    public function testCanCreatePepperoniPizza()
    {
        $newFactory = new PepperoniPizzaFactory();
        $MyPizza = $newFactory->BuildPizza();

        $this->assertInstanceOf(PepperoniPizza::class, $MyPizza);
    }
}
