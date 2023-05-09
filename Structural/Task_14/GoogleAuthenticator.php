<?php

namespace Structural\Decorator\Task14;
require_once "AuthenticatorDecorator.php";

class GoogleAuthenticator extends AuthenticatorDecorator
{
    public function authenticate($credentials)
    {
        echo 'Authentication by Google Account' . "<br>";
        return $credentials;
    }
}
