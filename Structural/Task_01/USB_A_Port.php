<?php

namespace Structural\Adapter\Task1;
require_once "LaptopUSBInterface.php";
use Structural\Adapter\Task1\LaptopUSBInterface;

class USB_A implements LaptopUSBInterface
{
    public function plugUSB_A()
    {
        return "USB_A is plugged";
    }
}
