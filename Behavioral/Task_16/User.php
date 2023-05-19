<?php

namespace Behavioral\Specification\Task16;

class User
{
    private $name;
    private $email;
    private $isVerified = 1;
    private $isActive = 1;
    private $role;
    
    public function __construct($name, $email, $role) 
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getIsVerified()
    {
        return $this->isVerified;
    }
    public function getIsActive()
    {
        return $this->isActive;
    }
}
