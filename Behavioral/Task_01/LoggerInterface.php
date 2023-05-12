<?php

namespace Behavioral\ChainOfResponsibility\Task1;

interface LoggerInterface
{
    public function handleTicket(Ticket $ticket);
    public function setNext(LoggerInterface $logger);
}
