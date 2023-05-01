<?php

namespace Test;
require_once "./Creational/Task_01/ButtonAbstractFactoryClass.php";

use Creational\AbstractFactory\Task1\ButtonAbstractFactoryClass;
use Creational\AbstractFactory\Task1\IconButton;
use Creational\AbstractFactory\Task1\ImageButton;
use Creational\AbstractFactory\Task1\TextButton;
use PHPUnit\Framework\TestCase;

class Task_01_test extends TestCase
{
    public function testCanCreateTextButton()
    {
        $ButtonFactory = new ButtonAbstractFactoryClass();
        $myButton = $ButtonFactory->CreateTextButton();

        $this->assertInstanceOf(TextButton::class, $myButton);
    }

    public function testCanCreateImageButton()
    {
        $ButtonFactory = new ButtonAbstractFactoryClass();
        $myButton = $ButtonFactory->CreateImageButton();

        $this->assertInstanceOf(ImageButton::class, $myButton);
    }

    public function testCanCreateIconeButton()
    {
        $ButtonFactory = new ButtonAbstractFactoryClass();
        $myButton = $ButtonFactory->CreateIconButton();

        $this->assertInstanceOf(IconButton::class, $myButton);
    }
}