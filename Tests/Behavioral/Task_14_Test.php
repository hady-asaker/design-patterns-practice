<?php

namespace Test;
require_once "./Behavioral/Task_14/User.php";

use Behavioral\Observer\Task14\User;
use Behavioral\Observer\Task14\Follower;


class Task_14_Test
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

        // echo '<pre>'; print_r($test->getFollowers()); echo'</pre>';

        echo $Follower1->getLeastNotification() . "<br>";
        echo $Follower2->getLeastNotification() . "<br>";
        $not = $Follower3->getLeastNotification() . "<br>";

        echo '<pre>';
        print_r($Follower1->getAllNotifications());
        echo '</pre>';
    }
}
