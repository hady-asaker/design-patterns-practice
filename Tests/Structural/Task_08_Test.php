<?php

namespace Test;
require_once "./Structural/Task_08/EmployeeInterface.php";
require_once "./Structural/Task_08/RegularEmployee.php";
require_once "./Structural/Task_08/Manager.php";
use PHPUnit\Framework\TestCase;
use Structural\Composite\Task8\Manager;
use Structural\Composite\Task8\RegularEmployee;

class Task_08_Test extends TestCase
{
    public function testAdding()
    {
        $Manager = new Manager("Manager-Sobhy", 18000);
        $this->assertCount(0, $Manager->returnAll());

        $Manager1 = new Manager("CEO-Karim", 8000);
        $Manager2 = new Manager("CBC-Dahy", 9500);

        $Employee1  = new RegularEmployee("Employee-Eslam", 6000);
        $Employee2  = new RegularEmployee("Employee-Ahmed", 4000);
        $Employee3  = new RegularEmployee("Employee-Fathy", 4000);
        $Employee4  = new RegularEmployee("Employee-Abdo", 5000);

        $Manager1->addChild($Employee1);
        $Manager1->addChild($Employee2);
        $Manager2->addChild($Employee3);
        $Manager2->addChild($Employee4);

        $Manager->addChild($Manager1);
        $Manager->addChild($Manager2);

        $this->assertCount(2, $Manager->returnAll());
        $this->assertContains($Manager->getChild("CEO-Karim"),$Manager->returnAll());
        $this->assertContains($Manager->getChild("CBC-Dahy"),$Manager->returnAll());
        $this->assertContains($Manager1->getChild("Employee-Ahmed"),$Manager1->returnAll());
        $this->assertContains($Manager2->getChild("Employee-Abdo"),$Manager2->returnAll());

    }

    public function testRemoving()
    {
        $Manager = new Manager("Manager-Sobhy", 18000);
        $this->assertCount(0, $Manager->returnAll());

        $Manager1 = new Manager("CEO-Karim", 8000);
        $Manager2 = new Manager("CBC-Dahy", 9500);

        $Employee1  = new RegularEmployee("Employee-Eslam", 6000);
        $Employee2  = new RegularEmployee("Employee-Ahmed", 4000);
        $Employee3  = new RegularEmployee("Employee-Fathy", 4000);
        $Employee4  = new RegularEmployee("Employee-Abdo", 5000);

        $Manager1->addChild($Employee1);
        $Manager1->addChild($Employee2);
        $Manager1->addChild($Employee3);
        $Manager2->addChild($Employee4);
        $this->assertCount(3, $Manager1->returnAll());

        $Manager->addChild($Manager1);
        $Manager->addChild($Manager2);

        $Manager1->removeChild("Employee-Eslam");
        $Manager1->removeChild("Employee-Ahmed");
        $this->assertCount(1, $Manager1->returnAll());

        $this->assertContains($Manager1->getChild("Employee-Fathy"),$Manager1->returnAll());
        $this->assertContains($Manager2->getChild("Employee-Abdo"),$Manager2->returnAll());
    }
}
