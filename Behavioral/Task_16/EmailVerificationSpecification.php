<?php

namespace Behavioral\Specification\Task16;
require_once "SpecificationInterface.php";

class EmailVerificationSpecification implements SpecificationInterface
{
    private $email;

    public function __construct(string $email) 
    {
        $this->email = $email;
    }
    
    public function isSatisfiedBy(User $user): bool
    {
        return $user->getEmail() === $this->email;
    }
}
