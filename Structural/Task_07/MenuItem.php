<?php

namespace Structural\Composite\Task7;
require_once "ComponentInterface.php";
use Structural\Composite\Task7\ComponentInterface;

class MenuItem implements ComponentInterface
{
    private $itemName;
    private $Url;

    public function __construct($itemName, $Url)
    {
        $this->itemName = $itemName;
        $this->Url = $Url;
    }

    public function getName()
    {
        return $this->itemName;
    }
    public function getUrl()
    {
        return $this->Url;
    }
}
