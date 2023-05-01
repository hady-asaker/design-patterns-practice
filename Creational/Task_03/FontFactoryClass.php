<?php

namespace Creational\AbstractFactory\Task3;
require_once "SerifFont.php";
require_once "SansSerifFont.php";
require_once "MonospaceFont.php";

class FontFactoryClass
{
    private $Text;
    private $Size;

    public function CreateSerifFont($Text, $Size) :SerifFont
    {
        return new SerifFont($Text, $Size);
    }
    
    public function CreateSansSerifFont($Text, $Size) :SansSerifFont
    {
        return new SansSerifFont($Text, $Size);
    }

    public function CreateMonospaceFont($Text, $Size) :MonospaceFont
    {
        return new MonospaceFont($Text, $Size);
    }

}


$test = new FontFactoryClass();

$SerifFont = $test->CreateSerifFont("DdDdDdDdD", 50);
// echo "<pre>"; print_r($SerifFont); echo "</pre>";
$showFont = $SerifFont->render();
echo $showFont;

$SansSerifFont = $test->CreateSansSerifFont("Hady", 30);
// echo "<pre>"; print_r($SansSerifFont); echo "</pre>";
$showFont = $SansSerifFont->render();
echo $showFont;

$MonospaceFont = $test->CreateMonospaceFont("Tik Tak", 40);
// echo "<pre>"; print_r($MonospaceFont); echo "</pre>";
$showFont = $MonospaceFont->render();
echo $showFont;

