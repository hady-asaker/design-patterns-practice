<?php

namespace Structural\Bridge\Task4;
require_once "OutputDeviceInterface.php";

class Speakers implements OutputDeviceInterface
{
    public function playAudio()
    {
        return "Speakers";
    }
}
