<?php

namespace Behavioral\Observer\Task12;
require_once "ObserverInterface.php";

class HumidityDisplay implements ObserverInterface
{
    private $state;

    public function update(SubjectInterface $subject)
    {
        /** @var WeatherStation $subject */
        $this->state = "The Humidity Updated To " . $subject->getHumidity();
    }
    public function getState()
    {
        return $this->state;
    }
}
