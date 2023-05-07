<?php

namespace Structural\Bridge\Task4;

interface AudioInterface
{
    public function play();
    public function setOutputDevice(OutputDeviceInterface $device);
}
