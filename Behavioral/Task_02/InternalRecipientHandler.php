<?php

namespace Behavioral\ChainOfResponsibility\Task2;
require_once "AbstractHandler.php";

class InternalRecipientHandler extends AbstractHandler
{
    public function handleEmail(Email $email)
    {
        $InternalRecipientEmailSubjects = ["Education", "A7a", "Facebook"];

        if (in_array($email->getSubject(), $InternalRecipientEmailSubjects)) 
        {
            $email->setHandler(self::class);
            $email->setDone(True);
            return "Internal email processed";
        }
        else 
        {
            return parent::handleEmail($email);
        }
    }

}
