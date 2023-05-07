<?php

namespace Structural\Bridge\Task4;
require_once "AudioInterface.php";

class WAV implements AudioInterface
{
    private $OutputDevice;

    public function setOutputDevice(OutputDeviceInterface $device)
    {
        $this->OutputDevice = $device;
    }
    public function play()
    {
        return "WAV-Audio is playing now on " . $this->OutputDevice->playAudio();
    }
}
