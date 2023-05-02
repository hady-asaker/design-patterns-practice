<?php

namespace Creational\Builder\Task6;
require_once "./WorkoutBuilderInterface.php";
require_once "./StrengthTrainingBuilder.php";

class Director
{
    private $Workout;

    public function __construct(WorkoutBuilderInterface $Workout) {
        $this->Workout = $Workout;
    }

    public function ProduceWorkout()
    {
        $this->Workout->SetWorkoutType();
        $this->Workout->NumberOfSets();
        $this->Workout->NumberOfReps();
        $this->Workout->Equipments();
        $this->Workout->Plan();
        return $this->Workout->ReturnWorkout();
    }
}

$Strength = new StrengthTrainingnBuilder();
$Director = new Director($Strength);
$Director->ProduceWorkout();
echo "<pre>"; print_r($Director); echo "</pre>";