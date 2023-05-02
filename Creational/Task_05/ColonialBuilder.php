<?php

namespace Creational\Builder\Task5;
require_once "HouseBuilderInterface.php";
require_once "models/ColonialHouse.php";

class ColonialBuilder implements HouseBuilderInterface
{
    private $type;

    public function buildHouse()
    {
        $this->type = new ColonialHouse();
    }
    public function floors()
    {
        $this->type->setPart("Colonial-Floors", 2);
    }
    public function Basement()
    {
        $this->type->setPart("Colonial-Basement", True);
    }
    public function bedrooms()
    {
        $this->type->setPart("Colonial-Bedrooms", 4);
    }
    public function bathrooms()
    {
        $this->type->setPart("Colonial-Bathrooms", 3);
    }
    public function kitchens()
    {
        $this->type->setPart("Colonial-Kitchens", 2);
    }
    public function garden()
    {
        $this->type->setPart("Colonial-Garden", True);
    }
    public function returnHouse() :ColonialHouse
    {
        return $this->type;
    }

}
