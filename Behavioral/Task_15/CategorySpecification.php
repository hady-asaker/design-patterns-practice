<?php

namespace Behavioral\Specification\Task15;
require_once "SpecificationInterface.php";

class CategorySpecification implements SpecificationInterface
{
    private $category;

    public function __construct(string $category) 
    {
        $this->category = $category;
    }

    public function isSatisfiedBy(Product $product) :bool
    {
        return $this->category === $product->getCategory();
    }

}
