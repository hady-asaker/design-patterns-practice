<?php

namespace Behavioral\Command\Task3;

class ElectronicDevice
{
    private bool $ON = false;

    public function TurnONDevice()
    {
        if ($this->ON === true) {
            echo "Device Already On";
        }
        else {
            echo "Device On";
            $this->ON = true;
        }
    }
    public function TurnOFFDevice()
    {
        if ($this->ON === true) {
            echo "Device Off";
            $this->ON = false;
        }
        else {
            echo "Device Already Off";
        }
    }
    public function VolumeUp()
    {
        if ($this->ON === true) {
            echo "Device's Volume Up";
        }
        else {
            echo "You Can't Because Device is Off";
        }
    }
    public function VolumeDown()
    {
        if ($this->ON === true) {
            echo "Device's Volume Down";
        }
        else {
            echo "You Can't Because Device is Off";
        }
    }
}
