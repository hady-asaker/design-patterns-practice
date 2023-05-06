<?php

namespace Structural\Bridge\Task3;
require_once "ShapeInterface.php";

class Square implements ShapeInterface
{
    private $color = "Basic";

    public function draw()
    {
        return "Square";
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
