<?php

namespace Structural\Bridge\Task3;
require_once "ColorInterface.php";

class BlueColor implements ColorInterface
{
    public function colorize()
    {
        return "Blue";
    }

}
