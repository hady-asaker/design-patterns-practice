<?php

namespace Behavioral\ChainOfResponsibility\Task2;

class Email
{
    private $subject;
    private $handler;
    private bool $done = false;

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    public function getSubject()
    {
        return $this->subject;
    }

    public function setHandler($handler)
    {
        $this->handler = $handler;
    }
    public function getHandler()
    {
        return $this->handler;
    }

    public function setDone(bool $isDone)
    {
        $this->done = $isDone;
    }
    public function getDone()
    {
        return $this->done;
    }

}
