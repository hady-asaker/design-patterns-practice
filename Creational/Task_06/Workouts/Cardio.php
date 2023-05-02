<?php

namespace Creational\Builder\Task6;
require_once "Workout.php";

class Cardio extends Workout
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