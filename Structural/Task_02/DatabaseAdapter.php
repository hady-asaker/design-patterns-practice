<?php

namespace Structural\Adapter\Task2;
require_once "DatabaseAdapterInterface.php";
require_once "LegacyDatabase.php";

class DatabaseAdapter implements DatabaseAdapterInterface
{
    public $legacyDatabase;

    public function __construct(LegacyDatabase $legacyDatabase) 
    {
        $this->legacyDatabase = $legacyDatabase;
    }

    public function fetch_data(): array
    {
        $legacyData = $this->legacyDatabase->get_data();
        // Translate the data to the format needed by the ModernDatabase
        $modernData = [];
        foreach ($legacyData as $data) {
            $modernData[] = array(
                'New_id' => $data['ID'],
                'New_name' => $data['NAME'],
                'New_email' => $data['EMAIL']
            );
        }
        return $modernData;
    }
}
