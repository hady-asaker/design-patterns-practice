<?php

namespace Behavioral\ChainOfResponsibility\Task2;
require_once "InternalRecipientHandler.php";
require_once "ExternalRecipientHandler.php";
require_once "HighPriorityHandler.php";
require_once "Email.php";

class Client
{

}


$InternalRecipientHandler = new InternalRecipientHandler();
$ExternalRecipientHandler = new ExternalRecipientHandler();
$HighPriorityHandler = new HighPriorityHandler();

$InternalRecipientHandler->setNext($ExternalRecipientHandler);
$ExternalRecipientHandler->setNext($HighPriorityHandler);

$email = new Email();
$email->setSubject("Kill");

$InternalRecipientHandler->handleEmail($email);
echo $email->getHandler();

