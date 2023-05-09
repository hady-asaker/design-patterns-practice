<?php

namespace Structural\Decorator\Task14;
require_once "AuthenticatorInterface.php";

abstract class AuthenticatorDecorator implements AuthenticatorInterface
{
    abstract public function authenticate($credentials);
}
