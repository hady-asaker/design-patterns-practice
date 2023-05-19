<?php

namespace Behavioral\Specification\Task16;

interface SpecificationInterface
{
    public function isSatisfiedBy(User $user) :bool;
}
