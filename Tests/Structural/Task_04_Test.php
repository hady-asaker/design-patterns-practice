<?php

namespace Test;
require_once "Structural/Task_04/MP3.php";
require_once "Structural/Task_04/FLAC.php";
require_once "Structural/Task_04/WAV.php";

use PHPUnit\Framework\TestCase;
use Structural\Bridge\Task4\FLAC;
use Structural\Bridge\Task4\HeadPhones;
use Structural\Bridge\Task4\MP3;
use Structural\Bridge\Task4\SoundBars;
use Structural\Bridge\Task4\Speakers;
use Structural\Bridge\Task4\WAV;

class Task_04_Test extends TestCase
{
    public function testCanPlayMP3AudioOnHeadphones()
    {
        $sound = new MP3();
        $sound->setOutputDevice(new HeadPhones);
        $mySound = $sound->play();

        $this->assertEquals("MP3-Audio is playing now on HeadPhones", $mySound);
    }
    public function testCanPlayMP3AudioOnSpeakers()
    {
        $sound = new MP3();
        $sound->setOutputDevice(new Speakers);
        $mySound = $sound->play();

        $this->assertEquals("MP3-Audio is playing now on Speakers", $mySound);
    }
    public function testCanPlayMP3AudioOnSoundBars()
    {
        $sound = new MP3();
        $sound->setOutputDevice(new SoundBars);
        $mySound = $sound->play();

        $this->assertEquals("MP3-Audio is playing now on SoundBars", $mySound);
    }
    public function testCanPlayWAVAudioOnHeadphones()
    {
        $sound = new WAV();
        $sound->setOutputDevice(new HeadPhones);
        $mySound = $sound->play();

        $this->assertEquals("WAV-Audio is playing now on HeadPhones", $mySound);
    }
    public function testCanPlayWAVAudioOnSpeakers()
    {
        $sound = new WAV();
        $sound->setOutputDevice(new Speakers);
        $mySound = $sound->play();

        $this->assertEquals("WAV-Audio is playing now on Speakers", $mySound);
    }
    public function testCanPlayWAVAudioOnSoundBars()
    {
        $sound = new WAV();
        $sound->setOutputDevice(new SoundBars);
        $mySound = $sound->play();

        $this->assertEquals("WAV-Audio is playing now on SoundBars", $mySound);
    }
    public function testCanPlayFLACAudioOnHeadphones()
    {
        $sound = new FLAC();
        $sound->setOutputDevice(new HeadPhones);
        $mySound = $sound->play();

        $this->assertEquals("FLAC-Audio is playing now on HeadPhones", $mySound);
    }
    public function testCanPlayFLACAudioOnSpeakers()
    {
        $sound = new FLAC();
        $sound->setOutputDevice(new Speakers);
        $mySound = $sound->play();

        $this->assertEquals("FLAC-Audio is playing now on Speakers", $mySound);
    }
    public function testCanPlayFLACAudioOnSoundBars()
    {
        $sound = new FLAC();
        $sound->setOutputDevice(new SoundBars);
        $mySound = $sound->play();

        $this->assertEquals("FLAC-Audio is playing now on SoundBars", $mySound);
    }
}
