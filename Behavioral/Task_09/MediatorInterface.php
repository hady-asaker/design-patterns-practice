<?php

namespace Behavioral\Mediator\Task9;

interface MediatorInterface
{
    public function registerAircraft(Aircraft $aircraft);
    public function handlePositionUpdates(array $PositionUpdates);
    public function issueInstructions();

}
