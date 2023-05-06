<?php

namespace Test;
require_once "./Structural/Task_02/LegacyDatabase.php";
require_once "./Structural/Task_02/ModernDatabase.php";
use PHPUnit\Framework\TestCase;
use Structural\Adapter\Task2\DatabaseAdapter;
use Structural\Adapter\Task2\LegacyDatabase;
use Structural\Adapter\Task2\ModernDatabase;

class Task_02_Test extends TestCase
{
    public function testCanFetchDataFromLegacyToModern()
    {
        $legacy = new LegacyDatabase();
        $adapter = new DatabaseAdapter($legacy);
        $modernDatabase = new ModernDatabase($adapter);
        $data = $modernDatabase->get_ModernData();

        $this->assertEquals(
            array(
                ['New_id' => 1, 'New_name' => 'Sa3fora', 'New_email' => 'Sa3fora@test.com'],
                ['New_id' => 2, 'New_name' => 'Bilia', 'New_email' => 'Bilia@test.com']
            ), $data
        );
    }

}
