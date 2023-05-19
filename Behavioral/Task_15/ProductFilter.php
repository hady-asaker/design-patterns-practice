<?php

namespace Behavioral\Specification\Task15;
require_once "Product.php";
require_once "NameSpecification.php";
require_once "PriceSpecification.php";
require_once "CategorySpecification.php";

class ProductFilter
{
    private array $Products = [];

    public function addProduct(Product $Product) 
    {
        $this->Products[] = $Product;
    }

    public function filterBySpecification(SpecificationInterface $specification)
    {
        foreach ($this->Products as $Product) 
        {
            if($specification->isSatisfiedBy($Product))
            {
                echo $Product->getName() . " " . $Product->getPrice() . " " . $Product->getCategory() . "<br>";
            }
        }
    }
    
    public function filterBySpecifications(array $specifications)
    {
        foreach ($this->Products as $Product) 
        {
            // Check product satisfies all the specifications.
            $satisfiedByAllSpecifications = true;
            foreach ($specifications as $specification) 
            {
                // If a specification is not satisfied by the product
                if (!$specification->isSatisfiedBy($Product))
                {
                    $satisfiedByAllSpecifications = false;
                    break;
                }
            }
            // If product satisfies all the specifications.
            if ($satisfiedByAllSpecifications) 
            {
                echo $Product->getName() . " " . $Product->getPrice() . " " . $Product->getCategory() . "<br>";
            }
        }
    }

    public function getAllProducts()
    {
        return $this->Products;
    }
}

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

// $test->filterBySpecification($NameSpecification);
// $test->filterBySpecification($CategorySpecification);
// $test->filterBySpecification($PriceSpecification);

$test->filterBySpecifications([$PriceSpecification, $CategorySpecification]);