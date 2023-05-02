<?php

namespace Creational\Builder\Task5;
require_once "HouseBuilderInterface.php";
require_once "models/VictorianHouse.php";

class VictorianBuilder implements HouseBuilderInterface
{
    private $type;

    public function buildHouse()
    {
        $this->type = new VictorianHouse();
    }
    public function floors()
    {
        $this->type->setPart("Victorian-Floors", 3);
    }
    public function Basement()
    {
        $this->type->setPart("Victorian-Basement", False);
    }
    public function bedrooms()
    {
        $this->type->setPart("Victorian-Bedrooms", 8);
    }
    public function bathrooms()
    {
        $this->type->setPart("Victorian-Bathrooms", 4);
    }
    public function kitchens()
    {
        $this->type->setPart("Victorian-Kitchens", 2);
    }
    public function garden()
    {
        $this->type->setPart("Victorian-Garden", True);
    }
    public function returnHouse() : VictorianHouse
    {
        return $this->type;
    }
}
/*
$v= new VictorianBuilder();
$v->buildHouse();
$v->floors();
$v->Basement();
$v->bedrooms();
$v->bathrooms();
$v->kitchens();
$v->garden();
$bb = $v->returnHouse();
// echo "<pre>"; print_r($bb); echo "</pre>";
*/
