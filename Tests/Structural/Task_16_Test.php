<?php

namespace Test;
require_once "./Structural/Task_16/NotificationFacade.php";

use PHPUnit\Framework\TestCase;
use Structural\Facade\Task16\NotificationFacade;

class Task_16_Test extends TestCase
{
    public function testCanSendEmail()
    {
        $Test = new NotificationFacade();
        $myEmail = $Test->sendEmail('tugrp@example.com', 'Subject', 'Message');
        $this->assertEquals("Sending email to 'tugrp@example.com' with 'subject' Subject and message 'Message'", $myEmail);
    }
    public function testCanSendSMS()
    {
        $Test = new NotificationFacade();
        $mySMS = $Test->sendSMS('+01252225555', 'Test');
        $this->assertEquals("SMS Message 'Test' Sent To '1252225555'", $mySMS);
    }
    public function testCanPushNotification()
    {
        $Test = new NotificationFacade();
        $myNotification = $Test->sendPushNotification('Test');
        $this->assertEquals("Pushed: 'Test'", $myNotification);
    }
}
