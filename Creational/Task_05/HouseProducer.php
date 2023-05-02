<?php

namespace Creational\Builder\Task5;

require_once "VictorianBuilder.php";
require_once "ColonialBuilder.php";
require_once "RanchBuilder.php";

class HouseProducer
{
    private $House;
    
    public function __construct(HouseBuilderInterface $House) {
        $this->House = $House;
    }

    public function ProduceHouce()
    {
        $this->House->buildHouse();
        $this->House->floors();
        $this->House->Basement();
        $this->House->bedrooms();
        $this->House->bathrooms();
        $this->House->kitchens();
        $this->House->garden();
        return $this->House->returnHouse();    
    }
}

$VictorianBuild = new VictorianBuilder();
$NewVictorianHouse = new HouseProducer($VictorianBuild);
$NewVictorianHouse->ProduceHouce();

echo "<pre>"; print_r($NewVictorianHouse); echo "</pre>";

echo "<hr>";

$ColonialBuild = new ColonialBuilder();
$NewColonialHouse = new HouseProducer($ColonialBuild);
$NewColonialHouse->ProduceHouce();

echo "<pre>"; print_r($NewColonialHouse); echo "</pre>";
