<?php

namespace Behavioral\State\Task17;

class Song
{
    private string $name;
    private float $length;

    public function __construct(string $name, float $length)
    {
        $this->name = $name;
        $this->length = $length;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLength() :float
    {
        return $this->length;
    }

}
