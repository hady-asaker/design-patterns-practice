<?php

namespace Test;
require_once "./Behavioral/Task_03/RemoteControl.php";

use Behavioral\Command\Task3\ElectronicDevice;
use Behavioral\Command\Task3\PowerOffCommand;
use Behavioral\Command\Task3\PowerOnCommand;
use Behavioral\Command\Task3\RemoteControl;
use Behavioral\Command\Task3\VolumeDownCommand;
use Behavioral\Command\Task3\VolumeUpCommand;
use PHPUnit\Framework\TestCase;

class Task_03_Test extends TestCase
{
    public function testRemoteControlTurnOn()
    {
        $receiver = new ElectronicDevice();
        $turnOn = new PowerOnCommand($receiver);
        
        $remote = new RemoteControl();
        $remote->setCommand($turnOn);   
        $remote->run();

        $this->assertTrue($receiver->returnStatus());
    }
    public function testRemoteControlTurnOff()
    {
        $receiver = new ElectronicDevice();
        $turnOn = new PowerOnCommand($receiver);
        $turnOff = new PowerOffCommand($receiver);
        
        $remote = new RemoteControl();
        $remote->setCommand($turnOn);   
        $remote->run();
        $remote->setCommand($turnOff);   
        $remote->run();

        $this->assertFalse($receiver->returnStatus());
    }
    public function testRemoteControlVolumeUp()
    {
        $receiver = new ElectronicDevice();
        $turnOn = new PowerOnCommand($receiver);
        $volumeUp = new VolumeUpCommand($receiver);
        
        $remote = new RemoteControl();
        $remote->setCommand($turnOn);
        $remote->run();
        $remote->setCommand($volumeUp);
        $remote->run();
        $remote->setCommand($volumeUp);
        $remote->run();
        $remote->setCommand($volumeUp);
        $remote->run();
        $remote->setCommand($volumeUp);
        $remote->run();

        $this->assertEquals($receiver->returnVolume(), 54);

    }
    public function testRemoteControlVolumeDown()
    {
        $receiver = new ElectronicDevice();
        $turnOn = new PowerOnCommand($receiver);
        $volumeDown = new VolumeDownCommand($receiver);
        
        $remote = new RemoteControl();
        $remote->setCommand($turnOn);
        $remote->run();
        $remote->setCommand($volumeDown);
        $remote->run();
        $remote->setCommand($volumeDown);
        $remote->run();

        $this->assertEquals($receiver->returnVolume(), 48);

    }
}
