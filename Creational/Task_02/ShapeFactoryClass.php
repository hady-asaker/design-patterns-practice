<?php

namespace Creational\AbstractFactory\Task2;

require_once "Circle.php";
require_once "Rectangle.php";
require_once "Triangle.php";
require_once "Shape.php";

class ShapeFactoryClass
{
    private $Radius;        // For Circles

    private $Length;        // For Rectangles
    private $Width;

    private $Base;     // For Triangles
    private $Hight;

    public function CreateCircle($Radius) :Circle
    {
        $this->Radius = $Radius;

        return new Circle($Radius);
    }
    
    public function CreateRectangle($Length, $Width) :Rectangle
    {
        $this->Length = $Length;
        $this->Width = $Width;

        return new Rectangle($Length, $Width);
    }

    public function CreateTriangle($Base, $Hight) :Triangle
    {
        $this->Base = $Base;
        $this->Hight = $Hight;

        return new Triangle($Base, $Hight);
    }

}

$test = new ShapeFactoryClass();

$Circle = $test->CreateCircle(10);
echo "<pre>"; print_r($Circle); echo "</pre>";

$Area = $Circle->CalculateArea();
echo "The Area Of Circle = $Area";

echo "<hr>";

$Rectangle = $test->CreateRectangle(10, 12);
echo "<pre>"; print_r($Rectangle); echo "</pre>";

$Perimeter = $Rectangle->CalculatePerimeter();
echo "The Perimeter Of Rectangle = $Perimeter";

echo "<hr>";

$Triangle = $test->CreateTriangle(4, 10);
echo "<pre>"; print_r($Triangle); echo "</pre>";

$Area = $Triangle->CalculateArea();
echo "The Area Of Triangle = $Area";