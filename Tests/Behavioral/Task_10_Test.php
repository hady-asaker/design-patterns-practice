<?php

namespace Test;
require_once "./Behavioral/Task_10/CareTaker.php";

use Behavioral\Memento\Task10\CareTaker;
use Behavioral\Memento\Task10\TextEditor;
use PHPUnit\Framework\TestCase;

class Task_10_Test extends TestCase
{
    public function testSavingText()
    {
        $textEditor = new TextEditor();
        $textEditor->modify("Hello World");
        $textEditor->modify("WTF");
        $textEditor->modify("PHP");

        $careTaker = new CareTaker($textEditor);
        $careTaker->commit();

        $lines = $textEditor->getText();
        $this->assertEquals(3, count($lines));
    }

    public function testRetrievingText()
    {
        $textEditor = new TextEditor();
        $textEditor->modify("Hello World");
        $textEditor->modify("WTF");
        $textEditor->modify("PHP");

        $careTaker = new CareTaker($textEditor);
        $careTaker->commit();

        $textEditor->modify("Memento Pattern");
        $textEditor->modify("CareTaker");

        // $careTaker->retrieve();

        $memento = $careTaker->retrieve();
        $this->assertEquals(3, count($memento->getText()));
    }
}
