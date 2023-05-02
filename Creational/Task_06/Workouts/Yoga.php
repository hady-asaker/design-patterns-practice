<?php

namespace Creational\Builder\Task6;

class Yoga
{
    private $NumberOfSets;
    private $NumberOfReps;
    private $Equipments = [];
    private $Plan;
    
    public function Sets($s)
    {
        $this->NumberOfSets = $s;
    }
    public function Reps($r)
    {
        $this->NumberOfReps = $r;
    }
    public function SetEquipments($e)
    {
        $this->Equipments = $e;
    }
    public function SetPlan($p)
    {
        $this->Plan = $p;
    }

}