<?php

namespace Creational\Builder\Task5;

class ColonialHouse
{
    private $parts = [];

    public function setPart($name, $value)
    {
        $this->parts[$name] = $value;
    }
}