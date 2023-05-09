<?php

namespace Structural\Decorator\Task14;

class GoogleAuthenticator extends AuthenticatorDecorator
{
    public function authenticate()
    {
        return 'Authentication by Google Account';
    }

}
