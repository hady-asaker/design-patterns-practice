<?php

namespace Behavioral\Mediator\Task9;
require_once "AirTrafficControl.php";

class Aircraft
{
    private $id;
    private $name;
    private $currentPosition;
    private AirTrafficControl $AirTrafficControl;
    private array $PositionUpdates = [];


    public function __construct($name) 
    {
        $this->name = $name;
        $this->currentPosition = 0;
        $this->id = rand(1, 1000);
    }

    public function setAirTrafficControl(AirTrafficControl $AirTrafficControl)
    {
        $this->AirTrafficControl = $AirTrafficControl;

    }

    public function updatePosition()
    {
        $this->PositionUpdates[] = ++$this->currentPosition;
        $this->AirTrafficControl->handlePositionUpdates($this->PositionUpdates);
    }
    public function getInstructions(string $msg)
    {
        $this->AirTrafficControl->issueInstructions();
    }
    
}
