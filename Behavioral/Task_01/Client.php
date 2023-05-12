<?php

namespace Behavioral\ChainOfResponsibility\Task1;
require_once "LoggerInterface.php";
require_once "AbstractHandler.php";
require_once "Ticket.php";
require_once "TechnicalLogger.php";
require_once "BillingLogger.php";
require_once "FeatureLogger.php";

class Client
{

    public $TechnicalLogger;
    public $BillingLogger;
    public $FeatureLogger;
    public $Ticket;

    public function __construct()
    {
        $this->TechnicalLogger = new TechnicalLogger();
        $this->BillingLogger = new BillingLogger();
        $this->FeatureLogger = new FeatureLogger();

        $this->TechnicalLogger->setNext($this->BillingLogger);
        $this->BillingLogger->setNext($this->FeatureLogger);

        $this->Ticket = new Ticket();

    }
}

$test = new Client();

$Handler = $test->TechnicalLogger;
$ticket = $test->Ticket;

$ticket->setCategory("Feature");

echo $Handler->handleTicket($ticket);
echo "<br>";
echo "Handler : " . $ticket->getHandler();