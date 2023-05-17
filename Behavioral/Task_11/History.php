<?php

namespace Behavioral\Memento\Task11;
require_once "Memento.php";

class History
{
    private $mementos = [];
    private Document $document;

    public function __construct(Document $document) 
    {
        $this->document = $document;
    }

    public function commit()
    {
        $this->mementos[] = $this->document->save();
    }
    public function retrievePreviousVersion()
    {
        $memento = array_pop($this->mementos);
        $previous = $this->document->restore($memento);
        return $previous;   // Document
    }
    public function getHistory()
    {
        return $this->mementos;
    }
}

$document = new Document();
$document->modify("aaa");
$document->modify("bbb");
$document->modify("ccc");

// $AllText = $document->getAll();
// echo '<pre>'; print_r($AllText); echo'</pre>';

$history = new History($document);
$history->commit();

// $AllHistory = $history->getHistory();
// echo '<pre>'; print_r($AllHistory); echo'</pre>';

$document->modify("ddd");
$document->modify("eee");
$document->modify("fff");
$history->commit();

$history->retrievePreviousVersion();
echo '<pre>'; print_r($history->retrievePreviousVersion()); echo'</pre>';
echo '<pre>'; print_r($document->getAll()); echo'</pre>';
