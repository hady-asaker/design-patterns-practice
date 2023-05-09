<?php

namespace Structural\Decorator\Task14;

abstract class AuthenticatorDecorator implements AuthenticatorInterface
{
    public function authenticate()
    {
        return 'Authentication';
    }

}
