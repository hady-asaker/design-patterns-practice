<?php

namespace Behavioral\Specification\Task16;
require_once "SpecificationInterface.php";

class AccountStatusSpecification implements SpecificationInterface
{
    private bool $status;

    public function __construct(bool $status) 
    {
        $this->status = $status;
    }
    
    public function isSatisfiedBy(User $user): bool
    {
        return $user->getIsActive() === $this->status;
    }
}