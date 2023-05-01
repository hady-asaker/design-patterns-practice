<?php

namespace Creational\AbstractFactory\Task2;
require_once "ShapeFactoryInterface.php";
require_once "Shape.php";

class Circle extends Shape implements ShapeFactoryInterface 
{
    private $Radius;

    public function __construct($r) {
        $this->Radius = $r;
    }

    public function CreateShape()
    {
        return "Circle";
    }

    public function CalculatePerimeter(){
        return 2 * 3.14 * $this->Radius;
    }

    public function CalculateArea(){
        return 3.14 * $this->Radius * $this->Radius;
    }

}