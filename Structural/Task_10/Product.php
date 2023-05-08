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

// $Product->Do->addProduct("Btates", 150);
// $Product->Do->addProduct("kware3", 250);
// $Product->Do->addProduct("chipsy", 5);
// $Product->Do->addProduct("Dog", 199.25);

// $Product->Do->removeProduct("kiki");
// $Product->Do->removeProduct("Btates");

// $Product->Do->getProduct("kiki");
// $Product->Do->getProduct("kware3");
$Product->Do->getProduct("chipsy");