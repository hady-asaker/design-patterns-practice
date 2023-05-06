<?php

namespace Structural\Adapter\Task2;
require_once "LegacyCodebaseInterface.php";

use Structural\Adapter\Task2\LegacyCodebaseInterface;

class LegacyDatabase implements LegacyCodebaseInterface
{
    public function get_data(): array
    {
        // Get the data from the legacy database
        return array(
            ['ID' => 1, 'NAME' => 'Sa3fora', 'EMAIL' => 'Sa3fora@test.com'],
            ['ID' => 2, 'NAME' => 'Bilia', 'EMAIL' => 'Bilia@test.com']
        );
    }
}
