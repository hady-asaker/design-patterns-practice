<?php

namespace Structural\Adapter\Task1;
require_once "USB_A_Port.php";
require_once "USBAdapter.php";

use Structural\Adapter\Task1\LaptopUSBInterface;
use Structural\Adapter\Task1\USB_A;

class ClientLaptop
{
    public $USB;

    public function __construct(LaptopUSBInterface $USB) 
    {
        $this->USB = $USB;
    }
}

$USB_A = new USB_A();
$client = new ClientLaptop($USB_A);
echo $client->USB->plugUSB_A() . "<br>";

//

$USB_C = new USB_C();
$Adapter = new USBAdapter($USB_C);
$client = new ClientLaptop($Adapter);
echo $client->USB->plugUSB_A() . "<br>";