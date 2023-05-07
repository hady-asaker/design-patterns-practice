<?php

namespace Structural\Bridge\Task5;

use Structural\Bridge\Task5\WeaponInterface;

interface CharacterInterface
{
    public function setWeapon(WeaponInterface $weapon);
    public function attack();
}
