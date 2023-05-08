<?php

namespace Structural\Decorator\Task13;
require_once "TextInterface.php";

class PlainText implements TextInterface
{
    private $text;
    public function __construct($text) 
    {
        $this->text = $text;
    }
    public function getFormattedText() :string
    {
        return $this->text;
    }

}
