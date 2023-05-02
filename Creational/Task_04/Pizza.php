<?php

namespace Creational\Builder\Task4;


class Pizza
{
    protected $details = [];

    public function setter($name, $value)
    {
        $this->details[$name] = $value;
    }
}