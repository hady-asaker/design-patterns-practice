<?php

namespace Creational\AbstractFactory\Task3;
require_once "FontFactoryInterface.php";

class MonospaceFont implements FontFactoryInterface
{
    private $Text;
    private $Size;

    public function __construct($Text, $Size) {
        $this->Text = $Text;
        $this->Size = $Size;
    }

    public function CreateFont()
    {
        return "This is Monospace Font";
    }

    public function render()
    {
        return "<div style='font-family: Monospace; font-size:".$this->Size."px'>" . $this->Text . "</div>";
    }

}
