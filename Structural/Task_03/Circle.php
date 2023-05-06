<?php

namespace Structural\Bridge\Task3;
require_once "ShapeInterface.php";
require_once "GreenColor.php";

class Circle implements ShapeInterface
{
    private $color = "Basic";

    public function draw()
    {
        return "Circle";
    }
    public function setColor(ColorInterface $color)
    {
        $this->color = $color->colorize();
    }
    public function GetShape()
    {
        return "This is " . $this->color . " " . $this->draw();
    }
}
