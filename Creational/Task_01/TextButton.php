<?php

namespace Creational\AbstractFactory\Task1;
require_once "ButtonFactoryInterface.php";

class TextButton implements ButtonFactoryInterface
{
    public $ButtonType = "Text Button";

    public function CreateButton()
    {
        return $this->ButtonType;
    }
}