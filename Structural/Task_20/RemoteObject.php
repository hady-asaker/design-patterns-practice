<?php

namespace Structural\Proxy\Task20;
require_once "NetworkInterface.php";

class RemoteObject implements NetworkInterface
{
    private $data = "Dataaaa";

    public function set_data($data)
    {
        $this->data = $data;
    }
    public function get_data()
    {
        return $this->data;
    }
}
