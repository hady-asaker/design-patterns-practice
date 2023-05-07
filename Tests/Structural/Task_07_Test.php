<?php

namespace Test;
require_once "Structural/Task_07/ComponentInterface.php";
require_once "Structural/Task_07/Menu.php";
require_once "Structural/Task_07/MenuItem.php";

use PHPUnit\Framework\TestCase;
use Structural\Composite\Task7\Menu;
use Structural\Composite\Task7\MenuItem;

class Task_07_Test extends TestCase
{
    public function testAdding()
    {
        $Menu = new Menu("Parent", "https://parentMenu.com");
        $this->assertCount(0, $Menu->returnAll());

        $MenuChild1 = new Menu("Child 1", "https://child1.com");
        $MenuChild2 = new Menu("Child 2", "https://child2.com");

        $MenuItem1  = new MenuItem("MenuItem 1", "https://MenuItem1.com");
        $MenuItem2  = new MenuItem("MenuItem 2", "https://MenuItem2.com");
        $MenuItem3  = new MenuItem("MenuItem 3", "https://MenuItem3.com");
        $MenuItem4  = new MenuItem("MenuItem 4", "https://MenuItem4.com");

        $MenuChild1->addChild($MenuItem1);
        $MenuChild1->addChild($MenuItem2);
        $MenuChild2->addChild($MenuItem3);

        $Menu->addChild($MenuChild1);
        $Menu->addChild($MenuChild2);
        $Menu->addChild($MenuItem4);

        $this->assertCount(3, $Menu->returnAll());
        $this->assertContains($Menu->getChild("Child 1"),$Menu->returnAll());
        $this->assertContains($Menu->getChild("Child 2"),$Menu->returnAll());
        $this->assertContains($Menu->getChild("MenuItem 4"),$Menu->returnAll());
    }
}
