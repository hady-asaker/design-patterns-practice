<?php

namespace Behavioral\Memento\Task10;
require_once "Memento.php";

class CareTaker
{
    private $mementos = [];
    private TextEditor $TextEditor;
    
    public function __construct(TextEditor $TextEditor) 
    {
        $this->TextEditor = $TextEditor;
    }

    public function commit()
    {
        $this->mementos[] = $this->TextEditor->save();
    }
    public function retrieve()
    {
        $memento = array_pop($this->mementos);
        $this->TextEditor->restore($memento);
        return $memento->getSnapShot();
    }
    public function getMementos()
    {
        return $this->mementos;
    }
}

$textEditor = new TextEditor();
$textEditor->modify("Hello World");
$textEditor->modify("WTF");
$textEditor->modify("OK");
// echo '<pre>'; print_r($textEditor->getText()); echo'</pre>';

$careTaker = new CareTaker($textEditor);
$careTaker->commit();
// echo '<pre>'; print_r($careTaker->getMementos()); echo'</pre>';
$textEditor->modify("Memento Pattern");
$textEditor->modify("PHP");
$textEditor->modify("CareTaker");
$careTaker->commit();
// echo '<pre>'; print_r($careTaker->getMementos()); echo'</pre>';

$careTaker->retrieve();
echo '<pre>'; print_r($careTaker->getMementos()); echo'</pre>';
