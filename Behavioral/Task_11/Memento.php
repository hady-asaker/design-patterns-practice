<?php

namespace Behavioral\Memento\Task11;
require_once "Document.php";

class Memento
{
    private Document $document;

    public function __construct(Document $document) 
    {
        $this->document = $document;
    }
    public function getSnapShot() 
    {
        return $this->document;
    }
}
