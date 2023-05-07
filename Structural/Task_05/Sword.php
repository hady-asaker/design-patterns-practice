<?php

namespace Structural\Bridge\Task5;
require_once "WeaponInterface.php";

class Sword implements WeaponInterface
{
    public function useWeapon()
    {
        return "Sword";
    }

}
