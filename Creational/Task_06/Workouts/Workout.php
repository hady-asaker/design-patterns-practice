<?php

namespace Creational\Builder\Task6;

abstract class Workout
{
    protected abstract function Sets($a);
    protected abstract function Reps($a);
    protected abstract function SetEquipments($a);
    protected abstract function SetPlan($a);
}