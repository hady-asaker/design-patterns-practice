<?php

// Client

namespace Structural\Adapter\Task2;
require_once "LegacyDatabase.php";
require_once "DatabaseAdapter.php";

class ModernDatabase
{
    private $Adapter;

    public function __construct(DatabaseAdapter $Adapter) 
    {
        $this->Adapter = $Adapter;
    }

    public function get_ModernData()
    {
        echo "Data After Updating";
        return $this->Adapter->fetch_data();
    }
}

$legacyDatabase = new LegacyDatabase();
$DatabaseAdapter = new DatabaseAdapter($legacyDatabase);
$modernDatabase = new ModernDatabase($DatabaseAdapter);
$data = $modernDatabase->get_ModernData();

echo "<pre>"; print_r($data); echo "</pre>"; 
