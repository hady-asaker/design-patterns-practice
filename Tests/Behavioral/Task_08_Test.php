<?php

namespace Test;
require_once "./Behavioral/Task_08/ChatRoom.php";

use Behavioral\Mediator\Task8\ChatRoom;
use Behavioral\Mediator\Task8\User;
use PHPUnit\Framework\TestCase;

class Task_08_Test extends TestCase
{
    public function testCanSendMessage()
    {
        $chatRoom = new ChatRoom();
        $user1 = new User("sa", "sa@sa.com", $chatRoom);
        $user2 = new User("ta", "ta@ta.com", $chatRoom);

        $chatRoom->registerUser($user1);
        $chatRoom->registerUser($user2);

        $msg = $user1->sendMessage("Hello, user2!", $user2);

        $this->assertContains("Hello, user2!", $user1->getSentMessages());
    }
    public function testCanReceiveMessage()
    {
        $chatRoom = new ChatRoom();
        $user1 = new User("sa", "sa@sa.com", $chatRoom);
        $user2 = new User("ta", "ta@ta.com", $chatRoom);

        $chatRoom->registerUser($user1);
        $chatRoom->registerUser($user2);

        $msg = $user1->sendMessage("Hello, user2!", $user2);

        $this->assertContains("Hello, user2!", $user2->getReceivedMessages());

    }
}
