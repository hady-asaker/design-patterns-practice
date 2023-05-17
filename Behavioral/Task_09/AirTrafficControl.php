<?php

namespace Behavioral\Mediator\Task9;
require_once "MediatorInterface.php";
require_once "Aircraft.php";

class AirTrafficControl
{
    private $registeredAircrafts = [];
    private $positionUpdates = [];
    private $collisionAvoidanceInstructions = [];
    
    public function registerAircraft(Aircraft $aircraft)
    {
        $this->registeredAircrafts[] = $aircraft;
    }
    public function handlePositionUpdates(array $PositionUpdates)
    {
        $this->positionUpdates[] = $PositionUpdates;
    }
    public function issueInstructions()
    {
        foreach ($this->registeredAircrafts as $value) 
        {

        }
    }
}

$control = new AirTrafficControl();

$aircraft1 = new Aircraft("a1");
$aircraft1->setAirTrafficControl($control);
$aircraft1->updatePosition();
$aircraft1->updatePosition();

$control->registerAircraft($aircraft1);

echo '<pre>'; print_r($control); echo'</pre>';