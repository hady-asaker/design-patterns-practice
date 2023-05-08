<?php

namespace Structural\Decorator\Task13;
require_once "TextInterface.php";

class UnderlineFormatter implements TextInterface
{
    private $text;

    public function __construct(TextInterface $text)
    {
        $this->text = $text;
    }

    public function getFormattedText() :string
    {
        return "<ins>" . $this->text->getFormattedText() . "</ins>";
    }

}
