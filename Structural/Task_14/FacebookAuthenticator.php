<?php

namespace Structural\Decorator\Task14;
require_once "AuthenticatorDecorator.php";

class FacebookAuthenticator extends AuthenticatorDecorator
{
    public function authenticate($credentials)
    {
        echo 'Authentication by Facebook Account' . "<br>";
        return $credentials;
    }
}
