<?php

namespace Behavioral\Mediator\Task8;

interface Mediator
{
    public function registerUser(User $User);
    public function sendMessage(string $message, User $user2);
    // public function handleUserRequest(User $user);

}
