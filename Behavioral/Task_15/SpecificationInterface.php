<?php

namespace Behavioral\Specification\Task15;

interface SpecificationInterface
{
    public function isSatisfiedBy(Product $product) :bool;
}
