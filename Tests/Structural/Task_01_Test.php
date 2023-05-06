<?php

namespace Test;
require_once "./Structural/Task_01/USB_A_Port.php";
require_once "./Structural/Task_01/ClientLaptop.php";
require_once "./Structural/Task_01/USBAdapter.php";

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Task1\ClientLaptop;
use Structural\Adapter\Task1\USB_A;
use Structural\Adapter\Task1\USB_C;
use Structural\Adapter\Task1\USBAdapter;

class Task_01_Test extends TestCase
{
    public function testCanPlugUSB_A()
    {
        $USB = new USB_A();
        $laptop = new ClientLaptop($USB);

        $this->assertEquals($laptop->USB->plugUSB_A(), "USB_A is plugged");
    }
    public function testCanPlugUSB_C()
    {
        $USB = new USB_C();
        $Adapter = new USBAdapter($USB);
        $laptop = new ClientLaptop($Adapter);

        $this->assertEquals($laptop->USB->plugUSB_A(), "USB_C is plugged");
    }
}