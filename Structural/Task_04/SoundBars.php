<?php

namespace Structural\Bridge\Task4;
require_once "OutputDeviceInterface.php";

class SoundBars implements OutputDeviceInterface
{
    public function playAudio()
    {
        return "SoundBars";
    }
}
