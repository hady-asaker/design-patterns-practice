<?php

namespace Structural\Bridge\Task5;
require_once "WeaponInterface.php";

class Wand implements WeaponInterface
{
    public function useWeapon()
    {
        return "Wand";
    }
}
