<?php
namespace Test;

require_once "Structural/Task_10/DataMapper.php";
require_once "Structural/Task_10/DataMapperInterface.php";
require_once "Structural/Task_10/DBConnection.php";

use PHPUnit\Framework\TestCase;
use Structural\DataMapper\Task10\DataMapper;
use Structural\DataMapper\Task10\Product;

class Task_10_Test extends TestCase
{
    private static DataMapper $DB;

    public static function setUpBeforeClass(): void
    {
        self::$DB = new DataMapper();
        $Product = new Product(self::$DB);

        $Product->Do->addProduct("Btates", 150);
        $Product->Do->addProduct("kware3", 250);
        $Product->Do->addProduct("chipsy", 5);
        $Product->Do->addProduct("Dog", 199.25);
    }

    // public static function tearDownAfterClass(): void
    // {
    //     $Product = new Product(self::$DB);

    //     $Product->Do>removeProduct("Btates");
    //     $Product->DoremoveProduct("kware3");
    //     $Product->DoremoveProduct("chipsy");
    //     $Product->DoremoveProduct("Dog");
    // }

    public function testCanAddProduct()
    {
        $Product = new Product(self::$DB);
        
        $result1 = $Product->Do->addProduct("Car", 500);
        $result2 = $Product->Do->addProduct("Book", 20);
        $result3 = $Product->Do->addProduct("Shirt", 30);
        $result4 = $Product->Do->addProduct("Laptop", 1000);

        $this->assertTrue($result1);
        $this->assertTrue($result2);
        $this->assertTrue($result3);
        $this->assertTrue($result4);
    }



    // public function testCanUpdateProduct()
    // {
        
    // }
    // public function testCanGetProduct()
    // {
        
    // }
    // public function testCanRemoveProduct()
    // {
        
    // }
}
