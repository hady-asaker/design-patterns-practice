<?php

namespace Structural\Decorator\Task14;
require_once "AuthenticatorInterface.php";
require_once "FacebookAuthenticator.php";
require_once "GoogleAuthenticator.php";

class UsernamePasswordAuthenticator implements AuthenticatorInterface
{
    public $Authenticator;
    public $Authentication;
    

    public function __construct(AuthenticatorDecorator $Authenticator = null) 
    {
        $this->Authenticator = $Authenticator;
    }
    
    public function authenticate($credentials)
    {
        if ($this->Authenticator == null) {
            echo 'Authenticate by Username and Password' . "<br>";
        }
        else {
            return $this->Authenticator->authenticate($credentials);
        }
        return $credentials;
    }
}

$x = new FacebookAuthenticator();
$y = new GoogleAuthenticator();

$test1 = new UsernamePasswordAuthenticator();
$test2 = new UsernamePasswordAuthenticator($x);
$test3 = new UsernamePasswordAuthenticator($y);

$basicData = $test1->authenticate(["username"=>"asd.125", "Password"=>"191520"]);
echo "<pre>";print_r($basicData); echo "</pre>";

$facebookData = $test2->authenticate(["facebook"=>".....", "ay7aga"=>"....."]);
echo "<pre>";print_r($facebookData); echo "</pre>";

$googleData = $test3->authenticate(["google"=>".....", "ay7aga"=>"....."]);
echo "<pre>";print_r($googleData); echo "</pre>";
