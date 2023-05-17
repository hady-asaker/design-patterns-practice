<?php

namespace Behavioral\Memento\Task10;

class TextEditor
{
    private $text = [];

    public function modify(string $text)
    {
        $this->text[] = $text;
    }
    public function save() :Memento
    {
        return new Memento(clone $this);
    }
    public function restore(Memento $memento)
    {
        return $memento->getSnapShot();
    }
    public function getText()
    {
        return $this->text;
    }

}
