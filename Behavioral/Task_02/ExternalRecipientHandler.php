<?php

namespace Behavioral\ChainOfResponsibility\Task2;
require_once "AbstractHandler.php";

class ExternalRecipientHandler extends AbstractHandler
{
    public function handleEmail(Email $email)
    {
        $ExternalRecipientEmailSubjects = ["exx", "ThGG", "Subject"];

        if (in_array($email->getSubject(), $ExternalRecipientEmailSubjects)) 
        {
            $email->setHandler(self::class);
            $email->setDone(True);
            return "External processed";
        }
        else 
        {
            return parent::handleEmail($email);
        }
    }
}
