<?php

namespace Test;
require_once "./Creational/Task_06/Director.php";

use Creational\Builder\Task6\Cardio;
use Creational\Builder\Task6\CardioBuilder;
use Creational\Builder\Task6\Director;
use Creational\Builder\Task6\StrengthTraining;
use Creational\Builder\Task6\StrengthTrainingnBuilder;
use Creational\Builder\Task6\Yoga;
use Creational\Builder\Task6\YogaBuilder;
use PHPUnit\Framework\TestCase;

class Task_06_Test extends TestCase
{
    public function testCanSetYogaWorkout()
    {
        $Builder = new YogaBuilder();
        $Director = new Director($Builder);
        $myYogaWorkout = $Director->ProduceWorkout();

        $this->assertInstanceOf(Yoga::class, $myYogaWorkout);
    }
    public function testCanSetStrengthWorkout()
    {
        $Builder = new StrengthTrainingnBuilder();
        $Director = new Director($Builder);
        $myStrengthWorkout = $Director->ProduceWorkout();

        $this->assertInstanceOf(StrengthTraining::class, $myStrengthWorkout);
    }
    public function testCanSetCardioWorkout()
    {
        $Builder = new CardioBuilder();
        $Director = new Director($Builder);
        $myCardioWorkout = $Director->ProduceWorkout();

        $this->assertInstanceOf(Cardio::class, $myCardioWorkout);
    }
}