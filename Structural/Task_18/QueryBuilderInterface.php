<?php

namespace Structural\FluentBuilder\Task18;

interface QueryBuilderInterface
{
    public function Select();
    public function Insert();
    public function Update();
    public function Delete();
}
