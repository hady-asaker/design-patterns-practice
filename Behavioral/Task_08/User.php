<?php

namespace Behavioral\Mediator\Task8;
require_once "ChatRoom.php";

class User
{
    private $name;
    private $email;
    private $ID;
    private Mediator $chat;
    private $SentMessages = [];
    private $ReceivedMessages = [];

    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
        $this->ID = rand(100000, 200000);
        $this->chat = new ChatRoom();
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function sendMessage(string $msg, User $user2)
    {
        $this->chat->sendMessage($msg, $user2);
        $this->SentMessages[] = $msg;
        // $user2->receiveMessage($msg);
    }
    public function receiveMessage(string $msg)
    {
        $this->ReceivedMessages[] = $msg;
    }
    public function getReceivedMessages()
    {
        echo "Received Messages";
        return $this->ReceivedMessages;
    }
    public function getSentMessages()
    {
        echo "Sent Messages";
        return $this->SentMessages;
    }
}
