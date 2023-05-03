<?php

namespace Creational\ProtoType\Task10;

class ProtoTypeVehicle
{
    public $Make = "parent";
    public $Model = "parent";
    public $Year = "parent";

    public function Drive()
    {
        return "ProtoType Driving";
    }
    public function startEngine()
    {
        return "The engine is started";
    }

    public function stopEngine()
    {
        return "The engine is stopped";
    }
    public function __clone(){
        return new ProtoTypeVehicle();
    }
}
