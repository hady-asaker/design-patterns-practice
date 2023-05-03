<?php

namespace Creational\ProtoType\Task10;
require_once "ProtoTypeVehicle.php";

class ClonedVehicle extends ProtoTypeVehicle
{
    public $fuelLevel;

    public function startEngine()
    {
        return "Starting Cloned Vehicle Engine";
    }

    public function stopEngine()
    {
        return "Stopping Cloned Vehicle Engine";
    }
    public function __clone()
    {
        parent::__clone();
        $this->fuelLevel = 100;
        return new ClonedVehicle;
    }
    public function ShallowCopy()
    {
        $l = new ClonedVehicle;
        $m = new ProtoTypeVehicle();
        $l = clone $m;
        return $l;
    }

}

$test = new ClonedVehicle();
echo "<pre>"; print_r($test); echo "</pre>";

// $t = clone $test;
$test2 = $test->ShallowCopy();
echo "<pre>"; print_r($test2); echo "</pre>";


// $t->Model = "Cloned";
// $t->Year = "Cloned";
// $t->Make = "Cloned";
// echo "<pre>"; print_r($t); echo "</pre>";

// $b = new ProtoTypeVehicle();
// echo "<pre>"; print_r($b); echo "</pre>";
