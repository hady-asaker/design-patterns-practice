<?php

namespace Structural\Decorator\Task14;

class FacebookAuthenticator extends AuthenticatorDecorator
{
    public function authenticate()
    {
        return 'Authentication by Facebook Account';
    }

}
