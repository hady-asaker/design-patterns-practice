<?php

namespace Behavioral\TemplateMethod\Task22;
require_once "CompletionStep.php";
require_once "ProcessingStep.php";
require_once "ValidationStep.php";

class WorkflowEngine
{
    private WorkflowStep $Workflow;

    public function setWorkflow(WorkflowStep $Workflow)
    {
        $this->Workflow = $Workflow;
    }
    public function Execute()
    {
        return $this->Workflow->Execute();
    }
}

$T = new WorkflowEngine();
$processingStep = new ProcessingStep();
$validationStep = new ValidationStep();
$completionStep = new CompletionStep();

$T->setWorkflow($processingStep);
$X = $T->Execute();
echo '<pre>'; print_r($X); echo'</pre>';

$T->setWorkflow($validationStep);
$X = $T->Execute();
echo '<pre>'; print_r($X); echo'</pre>';

$T->setWorkflow($completionStep);
$X = $T->Execute();
echo '<pre>'; print_r($X); echo'</pre>';

