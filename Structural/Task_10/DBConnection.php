<?php

namespace Structural\DataMapper\Task10;

use PDO;

class DBConnection
{
    private $DBName;
    private $DBUserName;
    private $DBPassword;
    private $DBHost;
    private $config;

    public function __construct() 
    {
        $this->DBName     = "DataMapper";
        $this->DBUserName = "root";
        $this->DBPassword = "";
        $this->DBHost     = "localhost";

        $this->config = new PDO(
            "mysql:host=$this->DBHost;
             dbname=$this->DBName;
             charset=utf8",
             $this->DBUserName,
             $this->DBPassword); 
    }
    public function connect()
    {   
        return $this->config;
    }       
}
