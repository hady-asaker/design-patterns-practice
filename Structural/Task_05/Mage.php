<?php

namespace Structural\Bridge\Task5;
require_once "CharacterInterface.php";

class Mage implements CharacterInterface
{
    private $Character = "Mage";
    private $Weapon;
    public function setWeapon(WeaponInterface $Weapon)
    {
        $this->Weapon = $Weapon;
    }
    public function attack()
    {
        return "Your character is " . $this->Character . " and Fights with a " . $this->Weapon->useWeapon();
    }

}
