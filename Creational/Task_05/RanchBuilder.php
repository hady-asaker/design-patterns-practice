<?php

namespace Creational\Builder\Task5;
require_once "HouseBuilderInterface.php";
require_once "models/RanchHouse.php";

class RanchBuilder implements HouseBuilderInterface
{
    private $type;

    public function buildHouse()
    {
        $this->type = new RanchHouse();
    }
    public function floors()
    {
        $this->type->setPart("Ranch-Floors", 3);
    }
    public function Basement()
    {
        $this->type->setPart("Ranch-Basement", False);
    }
    public function bedrooms()
    {
        $this->type->setPart("Ranch-Bedrooms", 8);
    }
    public function bathrooms()
    {
        $this->type->setPart("Ranch-Bathrooms", 4);
    }
    public function kitchens()
    {
        $this->type->setPart("Ranch-Kitchens", 2);
    }
    public function garden()
    {
        $this->type->setPart("Ranch-Garden", True);
    }
    public function returnHouse() :RanchHouse
    {
        return $this->type;
    }

}
