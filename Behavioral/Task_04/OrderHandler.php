<?php

namespace Behavioral\Command\Task4;
require_once "OrderCommand.php";

class OrderHandler
{
    public CommandInterface $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }
    public function run()
    {
        $this->command->execute();
    }
}

