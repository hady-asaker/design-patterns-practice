<?php

namespace Creational\Builder\Task6;
require_once "./WorkoutBuilderInterface.php";
require_once "./Workouts/Cardio.php";

class StrengthTrainingnBuilder implements WorkoutBuilderInterface
{
    private $WorkoutType;

    public function SetWorkoutType()
    {
        $this->WorkoutType = new Cardio();
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
        $this->WorkoutType->SetEquipments(['gg'=>"sad", "asdsa"=>"sadsa"]);
    }

    public function Plan()
    {
        $this->WorkoutType->SetPlan("plaaaaaaaan");
    }

    public function ReturnWorkout() :Cardio
    {
        return $this->WorkoutType;
    }

}