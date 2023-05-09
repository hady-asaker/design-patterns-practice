<?php

namespace Structural\Facade\Task16;
require_once "PushNotifications.php";
require_once "Email.php";
require_once "SMS.php";

class NotificationFacade
{
    private $PushNotifications;
    private $Email;
    private $SMS;

    public function __construct() 
    {
        $this->PushNotifications = new PushNotifications();
        $this->Email = new Email();
        $this->SMS = new SMS();
    }

    public function sendEmail($to, $subject, $message)
    {
        return $this->Email->send($to, $subject, $message);
    }
    public function sendSMS($to, $message)
    {
        return $this->SMS->send($to, $message);
    }
    public function sendPushNotification($message)
    {
        return $this->PushNotifications->push($message);
    }
}

$T = new NotificationFacade();
echo $T->sendEmail('tugrp@example.com', 'Subject', 'Message');
echo "<br>";
echo $T->sendSMS('+01252225555', 'Test');
echo "<br>";
echo $T->sendPushNotification('Test');
