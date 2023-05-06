<?php

namespace Structural\Bridge\Task3;
require_once "ColorInterface.php";

class GreenColor implements ColorInterface
{
    public function colorize()
    {
        return "Green";
    }
}
