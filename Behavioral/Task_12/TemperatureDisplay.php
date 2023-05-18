<?php

namespace Behavioral\Observer\Task12;
require_once "ObserverInterface.php";

class TemperatureDisplay implements ObserverInterface
{
    private $state;

    public function update(SubjectInterface $subject)
    {
        /** @var WeatherStation $subject */
        $this->state = "The Temperature Updated To " . $subject->getTemperature();
    }
    public function getState()
    {
        return $this->state;
    }
}
