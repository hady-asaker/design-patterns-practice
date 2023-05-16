<?php

namespace Behavioral\Mediator\Task8;
require_once "Mediator.php";
require_once "User.php";

class ChatRoom implements Mediator
{
    private $registeredUsers = [];

    public function registerUser(User $User)
    {
        foreach ($this->registeredUsers as $user)
        {
            if ($User->getEmail() == $user->getEmail()) 
            {
                echo "Account Exists";
                return;
            }    
        }
        $this->registeredUsers[] = $User;
    }
    public function handleUserRequest(User $user)
    {
        // $user->sendMessage("");
        // return $this->sendMessages();
    }
    public function sendMessage(string $message, User $user2)
    {
        $user2->receiveMessage($message);
    }
    public function getAllUsers()
    {
        return $this->registeredUsers;
    }
}

$chatRoom = new ChatRoom();
$user1 = new User("sa", "sa@sa.com", $chatRoom);
$user2 = new User("ta", "ta@ta.com", $chatRoom);

$chatRoom->registerUser($user1);
$chatRoom->registerUser($user2);

$user1->sendMessage("Hello, user2!", $user2);
$user2->sendMessage("Hello, user1!", $user1);

echo "user1";
echo '<pre>'; print_r($user1->getSentMessages()); echo'</pre>';
echo '<pre>'; print_r($user1->getReceivedMessages()); echo'</pre>';

echo "user2";
echo '<pre>'; print_r($user2->getSentMessages()); echo'</pre>';
echo '<pre>'; print_r($user2->getReceivedMessages()); echo'</pre>';


// echo '<pre>'; print_r($chatRoom); echo'</pre>';