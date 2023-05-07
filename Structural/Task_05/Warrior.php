<?php

namespace Structural\Bridge\Task5;
require_once "CharacterInterface.php";

class Warrior implements CharacterInterface
{
    private $Character = "Warrior";
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
