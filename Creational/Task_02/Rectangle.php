<?php

namespace Creational\AbstractFactory\Task2;
require_once "ShapeFactoryInterface.php";
require_once "Shape.php";

class Rectangle extends Shape implements ShapeFactoryInterface
{
    private $length;
    private $width;

    public function __construct($l, $w) {
        $this->length = $l;
        $this->width = $w;
    }

    public function CreateShape()
    {
        return "Rectangle";
    }

    public function CalculatePerimeter(){
        return $this->length * 2 + $this->width * 2;
    }

    public function CalculateArea(){
        return $this->length * $this->width;
    }

}