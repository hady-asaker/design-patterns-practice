<?php

namespace Test;
require_once "./Behavioral/Task_11/History.php";

use Behavioral\Memento\Task11\Document;
use Behavioral\Memento\Task11\History;
use PHPUnit\Framework\TestCase;

class Task_11_Test extends TestCase
{
    public function testSaving()
    {
        $document = new Document();
        $history = new History($document);

        $document->modify("aaa");
        $document->modify("bbb");
        $document->modify("ccc");
        $history->commit();

        $document->modify("ddd");
        $document->modify("eee");
        $document->modify("fff");
        $history->commit();

        $k = $document->getAll();
        $this->assertEquals(6, count($k));
    }
    public function testRetrieving()
    {
        $document = new Document();
        $history = new History($document);

        $document->modify("aaa");
        $document->modify("bbb");
        $document->modify("ccc");
        $history->commit();

        $document->modify("ddd");
        $document->modify("eee");
        $document->modify("fff");
        $history->commit();

        $history->retrievePreviousVersion();
        $this->assertEquals(3, count($history->retrievePreviousVersion()->getAll()));
    }
}
