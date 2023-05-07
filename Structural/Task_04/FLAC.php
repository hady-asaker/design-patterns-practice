<?php

namespace Structural\Bridge\Task4;
require_once "AudioInterface.php";

class FLAC implements AudioInterface
{
    private $OutputDevice;

    public function setOutputDevice(OutputDeviceInterface $device)
    {
        $this->OutputDevice = $device;
    }
    public function play()
    {
        return "FLAC-Audio is playing now on " . $this->OutputDevice->playAudio();
    }
}
