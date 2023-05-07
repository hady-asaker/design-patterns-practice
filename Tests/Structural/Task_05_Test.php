<?php

namespace Test;
require_once "Structural/Task_05/Archer.php";
require_once "Structural/Task_05/Mage.php";
require_once "Structural/Task_05/Warrior.php";
require_once "Structural/Task_05/Bow.php";
require_once "Structural/Task_05/Sword.php";
require_once "Structural/Task_05/Wand.php";

use PHPUnit\Framework\TestCase;
use Structural\Bridge\Task5\Archer;
use Structural\Bridge\Task5\Bow;
use Structural\Bridge\Task5\Mage;
use Structural\Bridge\Task5\Sword;
use Structural\Bridge\Task5\Wand;
use Structural\Bridge\Task5\Warrior;

class Task_05_Test extends TestCase
{
    public function testCanArcherFightWithBow()
    {
        $Character = new Archer();
        $Character->setWeapon(new Bow());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Archer and Fights with a Bow', $fight);
    }
    public function testCanArcherFightWithSword()
    {
        $Character = new Archer();
        $Character->setWeapon(new Sword());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Archer and Fights with a Sword', $fight);
    }
    public function testCanArcherFightWithWand()
    {
        $Character = new Archer();
        $Character->setWeapon(new Wand());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Archer and Fights with a Wand', $fight);
    }
    public function testCanMageFightWithBow()
    {
        $Character = new Mage();
        $Character->setWeapon(new Bow());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Mage and Fights with a Bow', $fight);
    }
    public function testCanMageFightWithSword()
    {
        $Character = new Mage();
        $Character->setWeapon(new Sword());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Mage and Fights with a Sword', $fight);
    }
    public function testCanMageFightWithWand()
    {
        $Character = new Mage();
        $Character->setWeapon(new Wand());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Mage and Fights with a Wand', $fight);
    }
    public function testCanWarriorFightWithBow()
    {
        $Character = new Warrior();
        $Character->setWeapon(new Bow());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Warrior and Fights with a Bow', $fight);
    }
    public function testCanWarriorFightWithSword()
    {
        $Character = new Warrior();
        $Character->setWeapon(new Sword());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Warrior and Fights with a Sword', $fight);
    }
    public function testCanWarriorFightWithWand()
    {
        $Character = new Warrior();
        $Character->setWeapon(new Wand());
        $fight = $Character->attack();

        $this->assertEquals('Your character is Warrior and Fights with a Wand', $fight);
    }
}
