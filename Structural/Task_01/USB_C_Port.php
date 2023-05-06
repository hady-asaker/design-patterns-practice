<?php

namespace Structural\Adapter\Task1;
require_once "USB_C_Interface.php";

class USB_C implements USB_C_Interface
{
    public function plugUSB_C()
    {
        return "USB_C is plugged";
    }
}
