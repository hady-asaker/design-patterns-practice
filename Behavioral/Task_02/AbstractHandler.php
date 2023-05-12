<?php

namespace Behavioral\ChainOfResponsibility\Task2;
require_once "EmailNotificationHandlerInterface.php";
require_once "Email.php";
abstract class AbstractHandler implements EmailNotificationHandlerInterface
{
    private ?EmailNotificationHandlerInterface $nextHandler = null;

    public function handleEmail(Email $email)
    {
        if ($this->nextHandler) 
        {
            return $this->nextHandler->handleEmail($email);
        }
    }
    public function setNext(EmailNotificationHandlerInterface $handler)
    {
        $this->nextHandler = $handler;
        return $handler;
    }

}
