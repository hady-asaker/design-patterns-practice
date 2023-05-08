<?php

namespace Structural\DataMapper\Task10;
require_once "DBConnection.php";
require_once "DataMapper.php";

class Product
{
    public $Do;

    public function __construct(DataMapper $DM) 
    {
        $this->Do = $DM;
    }
}

$DataMapper = new DataMapper();
$Product = new Product($DataMapper);

$Product->Do->addProduct();
$Product->Do->addProduct();

$Product->Do->removeProduct();
$Product->Do->removeProduct();

$Product->Do->getProduct();
$Product->Do->getProduct();

