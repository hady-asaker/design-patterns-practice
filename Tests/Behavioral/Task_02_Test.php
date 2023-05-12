<?php

namespace Test;
require_once "./Behavioral/Task_02/Client.php";

use Behavioral\ChainOfResponsibility\Task2\Email;
use Behavioral\ChainOfResponsibility\Task2\ExternalRecipientHandler;
use Behavioral\ChainOfResponsibility\Task2\HighPriorityHandler;
use Behavioral\ChainOfResponsibility\Task2\InternalRecipientHandler;
use PHPUnit\Framework\TestCase;

class Task_02_Test extends TestCase
{
    public function testCanHandleHighPriorityEmails()
    {
        $InternalRecipientHandler = new InternalRecipientHandler();
        $ExternalRecipientHandler = new ExternalRecipientHandler();
        $HighPriorityHandler = new HighPriorityHandler();

        $InternalRecipientHandler->setNext($ExternalRecipientHandler);
        $ExternalRecipientHandler->setNext($HighPriorityHandler);

        $email = new Email();
        $email->setSubject("Kill");

        $InternalRecipientHandler->handleEmail($email);

        $this->assertTrue($email->getDone());
        $this->assertEquals($HighPriorityHandler::class, $email->getHandler());

    }
    public function testCanHandleInternalRecipientEmails()
    {
        $InternalRecipientHandler = new InternalRecipientHandler();
        $ExternalRecipientHandler = new ExternalRecipientHandler();
        $HighPriorityHandler = new HighPriorityHandler();

        $InternalRecipientHandler->setNext($ExternalRecipientHandler);
        $ExternalRecipientHandler->setNext($HighPriorityHandler);

        $email = new Email();
        $email->setSubject("A7a");

        $InternalRecipientHandler->handleEmail($email);

        $this->assertTrue($email->getDone());
        $this->assertEquals($InternalRecipientHandler::class, $email->getHandler());

    }
    public function testCanHandleExternalRecipientEmails()
    {
        $InternalRecipientHandler = new InternalRecipientHandler();
        $ExternalRecipientHandler = new ExternalRecipientHandler();
        $HighPriorityHandler = new HighPriorityHandler();

        $InternalRecipientHandler->setNext($ExternalRecipientHandler);
        $ExternalRecipientHandler->setNext($HighPriorityHandler);

        $email = new Email();
        $email->setSubject("exx");

        $InternalRecipientHandler->handleEmail($email);

        $this->assertTrue($email->getDone());
        $this->assertEquals($ExternalRecipientHandler::class, $email->getHandler());

    }
    public function testCanNoOneHandleEmails()
    {
        $InternalRecipientHandler = new InternalRecipientHandler();
        $ExternalRecipientHandler = new ExternalRecipientHandler();
        $HighPriorityHandler = new HighPriorityHandler();

        $InternalRecipientHandler->setNext($ExternalRecipientHandler);
        $ExternalRecipientHandler->setNext($HighPriorityHandler);

        $email = new Email();
        $email->setSubject("kkkkkkkkk");

        $InternalRecipientHandler->handleEmail($email);

        $this->assertFalse($email->getDone());

    }
}
