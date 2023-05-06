<?php

namespace Structural\Bridge\Task3;
require_once "ColorInterface.php";

class RedColor implements ColorInterface
{
    public function colorize()
    {
        return "Red";
    }

}
