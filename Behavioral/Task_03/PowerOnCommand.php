<?php

namespace Behavioral\Command\Task3;
require_once "CommandInterface.php";
require_once "ElectronicDevice.php";

class PowerOnCommand implements CommandInterface
{
    private ElectronicDevice $receiver;

    public function __construct(ElectronicDevice $receiver) 
    {
        $this->receiver = $receiver;
    }
    public function execute()
    {
        $this->receiver->TurnONDevice();
    }

}
