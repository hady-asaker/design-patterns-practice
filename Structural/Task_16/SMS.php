<?php

namespace Structural\Facade\Task16;

class SMS
{
    public function send(int $to, string $message)
    {
        return "SMS Message '$message' Sent To '$to'";
    }
}
