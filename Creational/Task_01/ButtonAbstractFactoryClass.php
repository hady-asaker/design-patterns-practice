<?php

namespace Creational\AbstractFactory\Task1;

require_once "TextButton.php";
require_once "ImageButton.php";
require_once "IconButton.php";

class ButtonAbstractFactoryClass  
{
    public $Button;

    public function __construct() {}

    public function CreateTextButton() :TextButton
    {
        return new TextButton($this->Button);
    }
    
    public function CreateImageButton() :ImageButton
    {
        return new ImageButton($this->Button);
    }
    
    public function CreateIconButton() :IconButton
    {
        return new IconButton($this->Button);
    }

}

$newFactory = new ButtonAbstractFactoryClass();

// Tests
$TextButton = $newFactory->CreateTextButton();
print_r($TextButton);
echo "<br>";

$ImageButton = $newFactory->CreateImageButton();
print_r($ImageButton);
echo "<br>";

$IconButton = $newFactory->CreateIconButton();
print_r($IconButton);
echo "<br>";

