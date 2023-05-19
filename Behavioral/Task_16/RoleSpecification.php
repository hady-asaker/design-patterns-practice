<?php

namespace Behavioral\Specification\Task16;
require_once "SpecificationInterface.php";

class RoleSpecification implements SpecificationInterface
{
    private $role;

    public function __construct(string $role) 
    {
        $this->role = $role;
    }
    
    public function isSatisfiedBy(User $user): bool
    {
        return $user->getRole() === $this->role;
    }
}