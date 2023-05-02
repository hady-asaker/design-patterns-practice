<?php

namespace Creational\Builder\Task6;
require_once "WorkoutBuilderInterface.php";
require_once "StrengthTrainingBuilder.php";
require_once "YogaBuilder.php";
require_once "CardioBuilder.php";

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

$Cardio = new CardioBuilder();
$Director = new Director($Cardio);
$Director->ProduceWorkout();

echo "<pre>"; print_r($Director); echo "</pre>";
