<?php

namespace Behavioral\ChainOfResponsibility\Task2;

interface EmailNotificationHandlerInterface
{
    public function handleEmail(Email $email);
    public function setNext(EmailNotificationHandlerInterface $handler);
}
