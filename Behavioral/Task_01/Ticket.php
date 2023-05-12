<?php

namespace Behavioral\ChainOfResponsibility\Task1;

class Ticket
{
    private string $category;
    private string $description;
    private string $handler;
    private bool $Done = false;

    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setHandler($Handler)
    {
        $this->handler = $Handler;
    }
    public function getHandler()
    {
        return $this->handler;
    }

    public function setDone($done)
    {
        $this->Done = $done;
    }
    public function getDone()
    {
        return $this->Done;
    }
}
