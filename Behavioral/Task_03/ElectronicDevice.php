<?php

namespace Behavioral\Command\Task3;

class ElectronicDevice
{
    private bool $ON = false;
    private int $Volume = 50;

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
            if ($this->Volume < 100) 
            {
                echo "Device's Volume Up";
                ++$this->Volume;
            }
            else {
                echo "Device's Volume Highest Limit";
            }
        }
        else {
            echo "You Can't Because Device is Off";
        }
    }
    public function VolumeDown()
    {
        if ($this->ON === true) {
            if ($this->Volume > 0) 
            {
                echo "Device's Volume Down";
                --$this->Volume;
            }
            else {
                echo "Device's Volume Lowest Limit";
            }
        }
        else {
            echo "You Can't Because Device is Off";
        }
    }
    public function returnStatus()
    {
        return $this->ON;
    }
    public function returnVolume()
    {
        return $this->Volume;
    }
}
