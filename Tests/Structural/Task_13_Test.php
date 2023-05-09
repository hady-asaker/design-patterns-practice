<?php

namespace Test;
require_once "./Structural/Task_13/BoldFormatter.php";
use PHPUnit\Framework\TestCase;
use Structural\Decorator\Task13\BoldFormatter;
use Structural\Decorator\Task13\ItalicFormatter;
use Structural\Decorator\Task13\PlainText;
use Structural\Decorator\Task13\UnderlineFormatter;

class Task_13_Test extends TestCase
{
    public function testBoldFormatter()
    {
        $plainText = new PlainText("testBoldFormatter");
        $boldText = new BoldFormatter($plainText);
        $myText = $boldText->getFormattedText();

        $this->assertEquals($myText, "<b>testBoldFormatter</b>");
    }
    public function testItalicFormatter()
    {
        $plainText = new PlainText("testItalicFormatter");
        $italicText = new ItalicFormatter($plainText);
        $myText = $italicText->getFormattedText();

        $this->assertEquals($myText, "<i>testItalicFormatter</i>");

    }
    public function testUnderlineFormatter()
    {
        $plainText = new PlainText("testUnderlineFormatter");
        $UnderlinedText = new UnderlineFormatter($plainText);
        $myText = $UnderlinedText->getFormattedText();

        $this->assertEquals($myText, "<ins>testUnderlineFormatter</ins>");

    }
    public function testAllTogether()
    {
        $myText = new PlainText("Test All");
        $myText = new BoldFormatter($myText);
        $myText = new ItalicFormatter($myText);
        $myText = new UnderlineFormatter($myText);
        $myText = $myText->getFormattedText();

        $this->assertEquals($myText, "<ins><i><b>Test All</b></i></ins>");
    }
}
