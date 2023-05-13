<?php

namespace Behavioral\Command\Task3;
require_once "PowerOnCommand.php";
require_once "PowerOffCommand.php";
require_once "VolumeUpCommand.php";
require_once "VolumeDownCommand.php";

class RemoteControl
{
    private CommandInterface $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}

$receiver = new ElectronicDevice();

$turnOn = new PowerOnCommand($receiver);
$turnOff = new PowerOffCommand($receiver);
$volumeUp = new VolumeUpCommand($receiver);
$volumeDown = new VolumeDownCommand($receiver);

$remote = new RemoteControl();
$remote->setCommand($turnOn);   
$remote->run();
echo "<br>";
$remote->setCommand($volumeUp);
$remote->run();
echo "<br>";
$remote->setCommand($turnOff);
$remote->run();
echo "<br>";
$remote->setCommand($volumeDown);
$remote->run();
echo "<br>";
$remote->setCommand($turnOff);
$remote->run();
