<?php

namespace Structural\Bridge\Task5;
require_once "WeaponInterface.php";

class Bow implements WeaponInterface
{
    public function useWeapon()
    {
        return "Bow";
    }

}
