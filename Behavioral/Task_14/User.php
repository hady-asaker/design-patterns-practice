<?php

namespace Behavioral\Observer\Task14;
require_once "Follower.php";

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplSubject
{
    private $Followers;
    private $Posts = [];

    public function __construct() 
    {
        $this->Followers = new SplObjectStorage;
    }

    public function attach(SplObserver $Follower) :void
    {
        if (!$this->Followers->contains($Follower))
        {
            $this->Followers->attach($Follower);           
        }
        else { echo "You Already Followed This User"; }
    }

    public function detach(SplObserver $Follower) :void
    {
        $this->Followers->detach($Follower);
    }

    public function notify() :void
    {
        foreach ($this->Followers as $Follower) {
            $Follower->update($this);
        }
    }

    public function Post(string $post)
    {
        $this->Posts[] = $post;
        $this->notify();
    }

    public function getLeastPost() :mixed
    {
        return $this->Posts[count($this->Posts) - 1];
    }

    public function getFollowers()
    {
        return $this->Followers;
    }
}

$test = new User();

$Follower1 = new Follower("Ahmed");
$Follower2 = new Follower("Sasa");
$Follower3 = new Follower("De3bs");

$test->attach($Follower1);
$test->attach($Follower2);
$test->attach($Follower3);

// $test->detach($Follower3);

$test->Post('Hello World');
$test->Post('Hello Everybody');

// echo '<pre>'; print_r($test->getFollowers()); echo'</pre>';

echo $Follower1->getLeastNotification() . "<br>";
echo $Follower2->getLeastNotification() . "<br>";
echo $Follower3->getLeastNotification() . "<br>";

echo '<pre>'; print_r($Follower1->getAllNotifications()); echo'</pre>';