<?php

namespace Structural\Composite\Task6;

interface ComponentInterface
{
    public function getName() :string;
    public function getSize() :int;
    public function getCreationDate();
}
