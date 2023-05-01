<?php

namespace Test;
require "./Creational/Task_02/ShapeFactoryClass.php";

use Creational\AbstractFactory\Task2\ShapeFactoryClass;
use Creational\AbstractFactory\Task2\Circle;
use Creational\AbstractFactory\Task2\Rectangle;
use Creational\AbstractFactory\Task2\Triangle;
use PHPUnit\Framework\TestCase;

class Task_02_test extends TestCase
{
    public function testCanCreateCircle()
    {
        $newFactory = new ShapeFactoryClass();
        $newShape = $newFactory->CreateCircle(10);

        $this->assertInstanceOf(Circle::class, $newShape);
    }

    public function testCanCreateRectangle()
    {
        $newFactory = new ShapeFactoryClass();
        $newShape = $newFactory->CreateRectangle(10, 20);

        $this->assertInstanceOf(Rectangle::class, $newShape);
    }

    public function testCanCreateTriangle()
    {
        $newFactory = new ShapeFactoryClass();
        $newShape = $newFactory->CreateTriangle(10, 5);

        $this->assertInstanceOf(Triangle::class, $newShape);
    }
}