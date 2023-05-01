<?php

namespace Creational\AbstractFactory\Task2;
require_once "ShapeFactoryInterface.php";
require_once "Shape.php";

class Triangle extends Shape implements ShapeFactoryInterface
{
    private $Base;
    private $Hight;

    public function __construct($Base, $Hight) 
    {
        $this->Base = $Base;
        $this->Hight = $Hight;

    }
    
    public function CreateShape()
    {
        return "Triangle";
    }

    public function CalculatePerimeter(){

        $c = sqrt($this->Base**2 + $this->Hight**2);
        $perimeter = $this->Base + 2 * $c;

        return $perimeter;
    }

    public function CalculateArea(){

        $area = 1/2 * $this->Base * $this->Hight;

        return $area;
    }

}