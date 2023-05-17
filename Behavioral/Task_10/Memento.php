<?php

namespace Behavioral\Memento\Task10;
require_once "TextEditor.php";

class Memento
{
    private $TextEditor;

    public function __construct(TextEditor $TextEditor) 
    {
        $this->TextEditor = $TextEditor;
    }
    public function getSnapShot()
    {
        return $this->TextEditor;
    }
}
