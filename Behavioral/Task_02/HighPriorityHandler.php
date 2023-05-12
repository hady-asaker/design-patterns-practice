<?php

namespace Behavioral\ChainOfResponsibility\Task2;
require_once "AbstractHandler.php";

class HighPriorityHandler extends AbstractHandler
{
    public function handleEmail(Email $email)
    {
        $HighPriorityEmailSubjects = ["Nature", "Kill", "Help"];

        if (in_array($email->getSubject(), $HighPriorityEmailSubjects)) 
        {
            $email->setHandler(self::class);
            $email->setDone(True);
            return "HighPriority email processed";
        }
        else 
        {
            return parent::handleEmail($email);
        }
    }

}
