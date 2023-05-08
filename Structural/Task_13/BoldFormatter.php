<?php

namespace Structural\Decorator\Task13;
require_once "TextInterface.php";
require_once "PlainText.php";
require_once "ItalicFormatter.php";
require_once "UnderlineFormatter.php";

class BoldFormatter implements TextInterface
{
    private $text;

    public function __construct(TextInterface $text)
    {
        $this->text = $text;
    }

    public function getFormattedText() :string
    {
        return  "<b>" . $this->text->getFormattedText() . "</b>";
    }

}

$x = new PlainText("Fuck u");
$x = new BoldFormatter($x);
$x = new ItalicFormatter($x);
$x = new UnderlineFormatter($x);

echo $x->getFormattedText();