<?php

namespace Behavioral\ChainOfResponsibility\Task1;

class TechnicalLogger extends AbstractHandler
{
    public function handleTicket(Ticket $Ticket)
    {
        if ($Ticket->getCategory() == "Technical") 
        {
            $Ticket->setHandler(self::class);
            $Ticket->setDone(True);
            return "Technical Logger Handle Ticket";
        }
        else 
        {
            return parent::handleTicket($Ticket);
        }  
    }
}

