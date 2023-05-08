<?php

namespace Structural\DataMapper\Task10;
require_once "DataMapperInterface.php";

class DataMapper implements DataMapperInterface
{
    private $config;

    public function __construct() 
    {
        $this->config = new DBConnection();
        $this->config = $this->config->connect();
    }

    public function addProduct()
    {

    }

    public function removeProduct()
    {

    }
    
    public function getProduct()
    {

    }

}
