<?php

namespace Test;

require_once "./Creational/Task_03/FontFactoryClass.php";

use Creational\AbstractFactory\Task3\FontFactoryClass;
use Creational\AbstractFactory\Task3\MonospaceFont;
use Creational\AbstractFactory\Task3\SansSerifFont;
use Creational\AbstractFactory\Task3\SerifFont;
use PHPUnit\Framework\TestCase;

class Task_03_Test extends TestCase
{
    public function testCanCreateSerifFont()
    {
        $newFontsFactory = new FontFactoryClass();
        $myFont = $newFontsFactory->CreateSerifFont("Test", 15);

        $this->assertInstanceOf(SerifFont::class, $myFont);
    }

    public function testCanCreateSansSerifFont()
    {
        $newFontsFactory = new FontFactoryClass();
        $myFont = $newFontsFactory->CreateSansSerifFont("Test", 15);

        $this->assertInstanceOf(SansSerifFont::class, $myFont);
    }

    public function testCanCreateMonospaceFont()
    {
        $newFontsFactory = new FontFactoryClass();
        $myFont = $newFontsFactory->CreateMonospaceFont("Test", 15);

        $this->assertInstanceOf(MonospaceFont::class, $myFont);
    }
}