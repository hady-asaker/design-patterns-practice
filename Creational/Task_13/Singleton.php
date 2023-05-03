<?php

namespace Creational\Singleton\Task13;

class Visitor
{
    public $id;
    public $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;

        $CacheInstance = Cache::getInstance();
        $CacheInstance->set($this->id, $this->name);
    }
}


class Cache
{
    private static $instance = null;
    public $Visitors = [];
    public $counter = 0;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new Cache();
        }
        return self::$instance;
    }

    public function set($id, $name)
    {
        $this->Visitors[$id] = $name;
        $this->counter++;
    }
}

$v1 = new Visitor("152", "Ahmed");
$v2 = new Visitor("365", "Karim");
$v3 = new Visitor("854", "shalaby");
$v4 = new Visitor("256", "magdy");

$Instance = Cache::getInstance();

echo "<pre>"; print_r($Instance); echo "</pre>";
echo "All Visitors = " . $Instance->counter;