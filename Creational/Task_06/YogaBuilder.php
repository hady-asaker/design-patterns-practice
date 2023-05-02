<?php

namespace Creational\Builder\Task6;
require_once "WorkoutBuilderInterface.php";
require_once "Workouts/Yoga.php";

class YogaBuilder implements WorkoutBuilderInterface
{
    private $WorkoutType;

    public function SetWorkoutType()
    {
        $this->WorkoutType = new Yoga();
    }

    public function NumberOfSets()
    {
        $this->WorkoutType->Sets(5);
    }

    public function NumberOfReps()
    {
        $this->WorkoutType->Reps(5);
    }

    public function Equipments()
    {
        $this->WorkoutType->SetEquipments(['Clothes'=>"Yoga-Clothes", "Equips"=>"Yoga"]);
    }

    public function Plan()
    {
        $this->WorkoutType->SetPlan("Yoga-Plaaaan");
    }

    public function ReturnWorkout() :Yoga
    {
        return $this->WorkoutType;
    }
}