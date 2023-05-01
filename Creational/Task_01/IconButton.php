<?php

namespace Creational\AbstractFactory\Task1;
require_once "ButtonFactoryInterface.php";

class IconButton implements ButtonFactoryInterface
{
    public $ButtonType = "Icon Button";

    public function CreateButton()
    {
        return $this->ButtonType;
    }
}