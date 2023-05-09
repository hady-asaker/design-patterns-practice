<?php

namespace Structural\Facade\Task16;

class Email
{
    public function send(string $to, string $subject, string $message)
    {
        return "Sending email to '$to' with 'subject' $subject and message '$message'";
    }
}
