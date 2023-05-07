<?php

namespace Structural\Bridge\Task4;
require_once "OutputDeviceInterface.php";

class HeadPhones implements OutputDeviceInterface
{
    public function playAudio()
    {
        return "HeadPhones";
    }
}
