<?php

namespace Test;
require_once "./Behavioral/Task_22/WorkflowEngine.php";

use Behavioral\TemplateMethod\Task22\CompletionStep;
use Behavioral\TemplateMethod\Task22\ProcessingStep;
use Behavioral\TemplateMethod\Task22\ValidationStep;
use Behavioral\TemplateMethod\Task22\WorkflowEngine;
use PHPUnit\Framework\TestCase;

class Task_22_Test extends TestCase
{
    public function testKoloMraWahdaB2a3shan5lasWallahy()
    {
        $T = new WorkflowEngine();
        $processingStep = new ProcessingStep();
        $validationStep = new ValidationStep();
        $completionStep = new CompletionStep();

        $T->setWorkflow($processingStep);
        $X = $T->Execute();
        $this->assertEquals([
            'msh 3aref a3mel a bgd',
            'msh 3aref a3mel a bgd',
            'msh 3aref a3mel a bgd'], $X);

        $T->setWorkflow($validationStep);
        $X = $T->Execute();
        $this->assertEquals([
            'msh 3aref a3mel a bgd',
            'msh 3aref a3mel a bgd',
            'msh 3aref a3mel a bgd'], $X);

        $T->setWorkflow($completionStep);
        $X = $T->Execute();
        $this->assertEquals([
            'msh 3aref a3mel a bgd',
            'msh 3aref a3mel a bgd',
            'msh 3aref a3mel a bgd'], $X);

    }
}
