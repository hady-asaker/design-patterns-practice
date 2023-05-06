<?php

namespace Test;
require_once "./Structural/Task_03/Client.php";
use PHPUnit\Framework\TestCase;
use Structural\Bridge\Task3\BlueColor;
use Structural\Bridge\Task3\Circle;
use Structural\Bridge\Task3\GreenColor;
use Structural\Bridge\Task3\RedColor;
use Structural\Bridge\Task3\Square;
use Structural\Bridge\Task3\Triangle;

class Task_03_Test extends TestCase
{
    public function testCanCreateRedCircle()
    {
        $color = new RedColor();
        $shape = new Circle();
        $shape->setColor($color);
        $RedCircle = $shape->GetShape();

        $this->assertEquals("This is Red Circle", $RedCircle);
    }
    public function testCanCreateBlueCircle()
    {
        $color = new BlueColor();
        $shape = new Circle();
        $shape->setColor($color);
        $BlueCircle = $shape->GetShape();

        $this->assertEquals("This is Blue Circle", $BlueCircle);
    }
    public function testCanCreateGreenCircle()
    {
        $color = new GreenColor();
        $shape = new Circle();
        $shape->setColor($color);
        $GreenCircle = $shape->GetShape();

        $this->assertEquals("This is Green Circle", $GreenCircle);
    }
    public function testCanCreateRedTriangle()
    {
        $color = new RedColor();
        $shape = new Triangle();
        $shape->setColor($color);
        $RedTriangle = $shape->GetShape();

        $this->assertEquals("This is Red Triangle", $RedTriangle);
    }
    public function testCanCreateBlueTriangle()
    {
        $color = new BlueColor();
        $shape = new Triangle();
        $shape->setColor($color);
        $BlueTriangle = $shape->GetShape();

        $this->assertEquals("This is Blue Triangle", $BlueTriangle);
    }
    public function testCanCreateGreenTriangle()
    {
        $color = new GreenColor();
        $shape = new Triangle();
        $shape->setColor($color);
        $GreenTriangle = $shape->GetShape();

        $this->assertEquals("This is Green Triangle", $GreenTriangle);
    }
    public function testCanCreateRedSquare()
    {
        $color = new RedColor();
        $shape = new Square();
        $shape->setColor($color);
        $RedSquare = $shape->GetShape();

        $this->assertEquals("This is Red Square", $RedSquare);
    }
    public function testCanCreateBlueSquare()
    {
        $color = new BlueColor();
        $shape = new Square();
        $shape->setColor($color);
        $BlueSquare = $shape->GetShape();

        $this->assertEquals("This is Blue Square", $BlueSquare);
    }
    public function testCanCreateGreenSquare()
    {
        $color = new GreenColor();
        $shape = new Square();
        $shape->setColor($color);
        $GreenSquare = $shape->GetShape();

        $this->assertEquals("This is Green Square", $GreenSquare);
    }
}
