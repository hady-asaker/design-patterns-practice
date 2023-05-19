<?php

namespace Behavioral\Specification\Task15;
require_once "SpecificationInterface.php";

class PriceSpecification implements SpecificationInterface
{
    private $initialPrice;
    private $terminalPrice;

    public function __construct($initialPrice, $terminalPrice) 
    {
        $this->initialPrice = $initialPrice;
        $this->terminalPrice = $terminalPrice;
    }

    public function isSatisfiedBy(Product $product) :bool
    {
        return $this->initialPrice <= $product->getPrice() && $this->terminalPrice >= $product->getPrice();
    }

}
