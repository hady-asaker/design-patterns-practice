<?php

namespace Creational\Builder\Task6;

interface WorkoutBuilderInterface
{
    public function SetWorkoutType();
    public function NumberOfSets();
    public function NumberOfReps();
    public function Equipments();
    public function Plan();
    public function ReturnWorkout() :Workout;
}