<?php
 
namespace Structural\Decorator\Task14;

interface AuthenticatorInterface
{
    public function authenticate($credentials);
}