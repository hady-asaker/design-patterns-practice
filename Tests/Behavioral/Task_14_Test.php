<?php

namespace Test;
require_once "./Behavioral/Task_14/User.php";

use Behavioral\Observer\Task14\User;
use Behavioral\Observer\Task14\Follower;
use PHPUnit\Framework\TestCase;

class Task_14_Test extends TestCase
{
    public function testObserver()
    {
        $test = new User();

        $Follower1 = new Follower("Ahmed");
        $Follower2 = new Follower("Sasa");
        $Follower3 = new Follower("De3bs");

        $test->attach($Follower1);
        $test->attach($Follower2);
        $test->attach($Follower3);

        $test->Post('Hello World');
        $test->Post('Hello Everybody');

        $followers = $test->getFollowers();
        $this->assertEquals(3, count($followers));

        $this->assertEquals(2, count($Follower1->getAllNotifications()));
        $this->assertEquals(2, count($Follower2->getAllNotifications()));
        $this->assertEquals(2, count($Follower3->getAllNotifications()));
    }
}
