<?php

namespace Behavioral\ChainOfResponsibility\Task1;
require_once "LoggerInterface.php";
require_once "AbstractHandler.php";
require_once "Ticket.php";

class BillingLogger extends AbstractHandler
{
    public function handleTicket(Ticket $Ticket)
    {
        if ($Ticket->getCategory() == "Billing") 
        {
            $Ticket->setHandler(self::class);
            $Ticket->setDone(True);
            return "Billing Logger Handle Ticket";
        }
        else 
        {
            return parent::handleTicket($Ticket);
        } 
    }
}
