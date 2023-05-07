<?php

namespace Structural\Bridge\Task5;
require_once "CharacterInterface.php";

class Archer implements CharacterInterface
{
    private $Character = "Archer";
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
