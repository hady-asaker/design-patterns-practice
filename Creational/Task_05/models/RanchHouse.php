<?php

namespace Creational\Builder\Task5;

class RanchHouse
{
    private $parts = [];

    public function setPart($name, $value)
    {
        $this->parts[$name] = $value;
    }
}