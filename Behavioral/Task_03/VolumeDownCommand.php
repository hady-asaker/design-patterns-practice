<?php

namespace Behavioral\Command\Task3;
require_once "CommandInterface.php";
require_once "ElectronicDevice.php";

class VolumeDownCommand implements CommandInterface
{
    private ElectronicDevice $receiver;

    public function __construct(ElectronicDevice $receiver) 
    {
        $this->receiver = $receiver;
    }
    public function execute()
    {
        $this->receiver->VolumeDown();
    }
}
