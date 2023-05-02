<?php

namespace Creational\Builder\Task6;
require_once "WorkoutBuilderInterface.php";
require_once "Workouts/Cardio.php";

class CardioBuilder implements WorkoutBuilderInterface
{
    private $WorkoutType;

    public function SetWorkoutType()
    {
        $this->WorkoutType = new Cardio();
    }

    public function NumberOfSets()
    {
        $this->WorkoutType->Sets(1);
    }

    public function NumberOfReps()
    {
        $this->WorkoutType->Reps(1);
    }

    public function Equipments()
    {
        $this->WorkoutType->SetEquipments(['Clothes'=>"Cardio-Clothes", "Equips"=>"Cardio"]);
    }

    public function Plan()
    {
        $this->WorkoutType->SetPlan("Cardio-plaaaaaaaan");
    }

    public function ReturnWorkout() :Cardio
    {
        return $this->WorkoutType;
    }

}