<?php

namespace Creational\Builder\Task6;
require_once "./WorkoutBuilderInterface.php";
require_once "./Workouts/Yoga.php";

class Yoga implements WorkoutBuilderInterface
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
        $this->WorkoutType->SetEquipments(['gg'=>"sad", "asdsa"=>"sadsa"]);
    }

    public function Plan()
    {
        $this->WorkoutType->SetPlan("plaaaaaaaan");
    }

    public function ReturnWorkout() :Yoga
    {
        return $this->WorkoutType;
    }
}