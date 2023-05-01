<?php

namespace Creational\AbstractFactory\Task3;
require_once "FontFactoryInterface.php";

class SansSerifFont implements FontFactoryInterface
{
    private $Text;
    private $Size;

    public function __construct($Text, $Size) 
    {
        $this->Text = $Text;
        $this->Size = $Size;
    }

    public function CreateFont()
    {
        return "This is Sans-Serif Font";
    }

    public function render()
    {
        return "<div style='font-family: sans-serif; font-size:".$this->Size."px'>" . $this->Text . "</div>";
    }

}
