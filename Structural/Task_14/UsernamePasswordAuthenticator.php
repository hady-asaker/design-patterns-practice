<?php

namespace Structural\Decorator\Task14;

class UsernamePasswordAuthenticator implements AuthenticatorInterface
{
    public function authenticate()
    {
        return 'Authenticate by Username and Password';
    }
}
