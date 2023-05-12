<?php

namespace Behavioral\ChainOfResponsibility\Task1;

abstract class AbstractHandler implements LoggerInterface
{
    private ?LoggerInterface $nextHandler = null;

    public function handleTicket(Ticket $ticket)
    {
        if($this->nextHandler)
        {
            return $this->nextHandler->handleTicket($ticket);
        }
    }
    public function setNext(LoggerInterface $logger) :LoggerInterface
    {
        $this->nextHandler = $logger;
        return $logger;
    }

}
