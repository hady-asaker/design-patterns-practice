<?php

namespace Behavioral\Observer\Task12;
require_once "ObserverInterface.php";

class PressureDisplay implements ObserverInterface
{
    private $state;

    public function update(SubjectInterface $subject)
    {
        /** @var WeatherStation $subject */
        $this->state = "The Pressure Updated To " . $subject->getPressure();
    }
    public function getState()
    {
        return $this->state;
    }
}
