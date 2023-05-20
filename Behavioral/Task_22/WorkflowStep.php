<?php

namespace Behavioral\TemplateMethod\Task22;

abstract class WorkflowStep
{
    private array $test = [];

    public function execute()
    {
        $this->test[] = $this->preExecute();
        $this->test[] = $this->executeAction();
        $this->test[] = $this->postExecute();
        return $this->test;
    }
    abstract protected function preExecute();
    abstract protected function executeAction();
    abstract protected function postExecute();
}
