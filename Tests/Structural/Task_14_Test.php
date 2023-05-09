<?php
  
namespace Test;
require_once "./Structural/Task_14/UsernamePasswordAuthenticator.php";

use PHPUnit\Framework\TestCase;
use Structural\Decorator\Task14\FacebookAuthenticator;
use Structural\Decorator\Task14\GoogleAuthenticator;
use Structural\Decorator\Task14\UsernamePasswordAuthenticator;

class Task_14_Test extends TestCase
{
    public function testUsernamePasswordAuthenticator()
    {
        $k = new UsernamePasswordAuthenticator();
        $myData = $k->authenticate("kik");

        $this->assertEquals("kik", $myData);
    }

    public function testFacebookAuthenticator()
    {
        $x = new FacebookAuthenticator();
        $k = new UsernamePasswordAuthenticator($x);
        $myData = $k->authenticate("facebook");

        $this->assertEquals("facebook", $myData);
    }
    public function testGoogleAuthenticator()
    {
        $x = new GoogleAuthenticator();
        $k = new UsernamePasswordAuthenticator($x);
        $myData = $k->authenticate("google");

        $this->assertEquals("google", $myData);
    }
}
