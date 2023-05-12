<?php

namespace Test;
require_once "./Behavioral/Task_01/Client.php";

use Behavioral\ChainOfResponsibility\Task1\BillingLogger;
use Behavioral\ChainOfResponsibility\Task1\FeatureLogger;
use Behavioral\ChainOfResponsibility\Task1\TechnicalLogger;
use Behavioral\ChainOfResponsibility\Task1\Ticket;
use PHPUnit\Framework\TestCase;

class Task_01_Test extends TestCase
{
    public function testTechnicalLoggerCanHandleTicket()
    {
        $TechnicalLogger = new TechnicalLogger();
        $BillingLogger = new BillingLogger();
        $FeatureLogger = new FeatureLogger();
        
        $TechnicalLogger->setNext($BillingLogger);
        $BillingLogger->setNext($FeatureLogger);
        
        $Ticket = new Ticket();
        $Ticket->setCategory("Technical");
        

        $this->assertEquals("Technical Logger Handle Ticket", $TechnicalLogger->handleTicket($Ticket));
        $this->assertEquals(TechnicalLogger::class, $Ticket->getHandler());
        $this->assertTrue($Ticket->getDone());
    }

    public function testBillingLoggerCanHandleTicket()
    {
        $TechnicalLogger = new TechnicalLogger();
        $BillingLogger = new BillingLogger();
        $FeatureLogger = new FeatureLogger();
        
        $TechnicalLogger->setNext($BillingLogger);
        $BillingLogger->setNext($FeatureLogger);
        
        $Ticket = new Ticket();
        $Ticket->setCategory("Billing");
        

        $this->assertEquals("Billing Logger Handle Ticket", $TechnicalLogger->handleTicket($Ticket));
        $this->assertEquals(BillingLogger::class, $Ticket->getHandler());
        $this->assertTrue($Ticket->getDone());
    }

    public function testFeatureLoggerCanHandleTicket()
    {
        $TechnicalLogger = new TechnicalLogger();
        $BillingLogger = new BillingLogger();
        $FeatureLogger = new FeatureLogger();
        
        $TechnicalLogger->setNext($BillingLogger);
        $BillingLogger->setNext($FeatureLogger);
        
        $Ticket = new Ticket();
        $Ticket->setCategory("Feature");
        

        $this->assertEquals("Feature Logger Handle Ticket", $TechnicalLogger->handleTicket($Ticket));
        $this->assertEquals(FeatureLogger::class, $Ticket->getHandler());
        $this->assertTrue($Ticket->getDone());
    }

    public function testNoOneCanHandleTicket()
    {
        $TechnicalLogger = new TechnicalLogger();
        $BillingLogger = new BillingLogger();
        $FeatureLogger = new FeatureLogger();
        
        $TechnicalLogger->setNext($BillingLogger);
        $BillingLogger->setNext($FeatureLogger);
        
        $Ticket = new Ticket();
        $Ticket->setCategory("ayHaga");
        

        $this->assertFalse($Ticket->getDone());
    }
}
