<?php

namespace Structural\Bridge\Task4;
require_once "AudioInterface.php";
require_once "OutputDeviceInterface.php";
require_once "HeadPhones.php";
require_once "SoundBars.php";
require_once "Speakers.php";

class MP3 implements AudioInterface
{
    private $OutputDevice;

    public function setOutputDevice(OutputDeviceInterface $device)
    {
        $this->OutputDevice = $device;
    }
    public function play()
    {
        return "MP3-Audio is playing now on " . $this->OutputDevice->playAudio();
    }
}

$mb3 = new MP3();
$mb3->setOutputDevice(new HeadPhones());
echo $mb3->play();

echo "<br>";

$mb3 = new MP3();
$mb3->setOutputDevice(new SoundBars());
echo $mb3->play();