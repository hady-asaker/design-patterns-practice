<?php

namespace Behavioral\Memento\Task11;

class Document
{
    private $text = [];

    public function modify(string $str)
    {
        $this->text[] = $str;
    }
    public function save()
    {
        return new Memento(clone $this);
    }
    public function restore(Memento $memento)
    {
        return $memento->getSnapShot();
    }
    public function getAll()
    {
        return $this->text;
    }
}
