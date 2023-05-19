<?php

namespace Behavioral\Specification\Task15;
require_once "SpecificationInterface.php";

class NameSpecification implements SpecificationInterface
{
    private $name;

    public function __construct(string $name) 
    {
        $this->name = $name;
    }

    public function isSatisfiedBy(Product $product) :bool
    {
        return $this->name === $product->getName();
    }

}
