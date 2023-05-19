<?php

namespace Test;
require_once "./Behavioral/Task_15/ProductFilter.php";

use Behavioral\Specification\Task15\CategorySpecification;
use Behavioral\Specification\Task15\NameSpecification;
use Behavioral\Specification\Task15\PriceSpecification;
use Behavioral\Specification\Task15\Product;
use Behavioral\Specification\Task15\ProductFilter;
use PHPUnit\Framework\TestCase;

class Task_15_Test extends TestCase
{
    public function testFilterBySpecification()
    {
        $Product1 = new Product("Apple", 50, "Fruit");
        $Product2 = new Product("Orange", 40, "Fruit");
        $Product3 = new Product("TV1", 100, "Device");
        $Product4 = new Product("Mobile1", 150, "Device");
        $Product5 = new Product("Mobile2", 200, "Device");
        $Product6 = new Product("Banana", 25, "Fruit");
        $Product7 = new Product("TV2", 85, "Device");

        $test = new ProductFilter();

        $test->addProduct($Product1);
        $test->addProduct($Product2);
        $test->addProduct($Product3);
        $test->addProduct($Product4);
        $test->addProduct($Product5);
        $test->addProduct($Product6);
        $test->addProduct($Product7);

        $NameSpecification = new NameSpecification("Apple");
        $PriceSpecification = new PriceSpecification(24, 100);
        $CategorySpecification = new CategorySpecification("Fruit");

        $n = $test->filterBySpecification($NameSpecification);
        $c = $test->filterBySpecification($CategorySpecification);
        $p = $test->filterBySpecification($PriceSpecification);
        $this->assertEquals("Apple 50 Fruit" . "<br>", $n);
    }
    
    public function testFilterBySpecifications()
    {
        $Product1 = new Product("Apple", 50, "Fruit");
        $Product2 = new Product("Orange", 40, "Fruit");
        $Product3 = new Product("TV1", 100, "Device");
        $Product4 = new Product("Mobile1", 150, "Device");
        $Product5 = new Product("Mobile2", 200, "Device");
        $Product6 = new Product("Banana", 25, "Fruit");
        $Product7 = new Product("TV2", 85, "Device");
        
        $test = new ProductFilter();
        
        $test->addProduct($Product1);
        $test->addProduct($Product2);
        $test->addProduct($Product3);
        $test->addProduct($Product4);
        $test->addProduct($Product5);
        $test->addProduct($Product6);
        $test->addProduct($Product7);
        
        $PriceSpecification = new PriceSpecification(150, 250);
        $CategorySpecification = new CategorySpecification("Device");
                
        $Satisfied = $test->filterBySpecifications([$PriceSpecification, $CategorySpecification]);
        $this->assertEquals([$Product4, $Product5], $Satisfied);
    }
    
}
