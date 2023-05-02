<?php

namespace Creational\Builder\Task5;

class VictorianHouse
{
    private $parts = [];

    public function setPart($name, $value)
    {
        $this->parts[$name] = $value;
    }
}