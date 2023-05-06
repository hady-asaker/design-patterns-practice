<?php

namespace Structural\Adapter\Task1;
require_once "LaptopUSBInterface.php";
require_once "USB_C_Port.php";
use Structural\Adapter\Task1\LaptopUSBInterface;

class USBAdapter implements LaptopUSBInterface
{
    public $Adapter;

    public function __construct(USB_C $Adapter) 
    {
        $this->Adapter = $Adapter;
    }
    public function plugUSB_A()
    {
        return $this->Adapter->plugUSB_C();
    }
}
