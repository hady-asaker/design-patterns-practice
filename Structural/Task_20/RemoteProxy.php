<?php

namespace Structural\Proxy\Task20;
require_once "RemoteObject.php";

class RemoteProxy implements NetworkInterface
{
    private $RemoteObject;
    private $Protocol = "HTTP";

    public function __construct() {
        $this->RemoteObject = new RemoteObject;
    }

    public function get_data()
    {
        echo "Sending {$this->Protocol} Request To The Remote Object<br>";
        return $this->RemoteObject->get_data();
    }
    public function set_data($data)
    {
        $this->RemoteObject->set_data($data);
    }

}

$proxy = new RemoteProxy();
// $proxy->set_data("Proxy Data");      // If You Don't Set A Data Will Retrieve Data From Remote Object
echo $proxy->get_data();
