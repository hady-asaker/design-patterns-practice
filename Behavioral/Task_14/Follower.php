<?php

namespace Behavioral\Observer\Task14;

use SplObserver;
use SplSubject;

class Follower implements SplObserver
{
    private $name;
    private $notifications = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject): void
    {
        /** @var User $subject */
        $this->notifications[] = "User Added Post : " . $subject->getLeastPost();
    }

    public function getLeastNotification()
    {
        return $this->notifications[count($this->notifications) - 1];
    }
    public function getAllNotifications()
    {
        return $this->notifications;
    }
}
