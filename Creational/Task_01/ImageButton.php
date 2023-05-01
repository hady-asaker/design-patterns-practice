<?php

namespace Creational\AbstractFactory\Task1;
require_once "ButtonFactoryInterface.php";

class ImageButton implements ButtonFactoryInterface
{
    public $ButtonType = "Image Button";

    public function CreateButton()
    {
        return $this->ButtonType;
    }
}