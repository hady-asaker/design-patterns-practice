<?php

namespace Test;
require_once "./Structural/Task_20/RemoteProxy.php";
use PHPUnit\Framework\TestCase;
use Structural\Proxy\Task20\RemoteProxy;

class Task_20_Test extends TestCase
{
    public function testCanSetDataInRemoteObject()
    {
        $proxy = new RemoteProxy();
        $proxy->set_data("Test Data");
        $myData = $proxy->get_data();

        $this->assertEquals("Test Data", $myData);
    }

    public function testCanGetDataInRemoteObject()
    {
        $proxy = new RemoteProxy();
        $myData = $proxy->get_data();

        $this->assertEquals("Dataaaa", $myData);

    }
}
