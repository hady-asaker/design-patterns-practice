<?php

namespace Behavioral\TemplateMethod\Task21;

abstract class ReportTemplate
{
    private array $report = [];

    final public function generateReport()
    {
        $this->report["Header"] = $this->generateHeader();
        $this->report["Body"] = $this->generateBody();
        $this->report["Footer"] = $this->generateFooter();
        return $this->report;
    }
    abstract protected function generateHeader(); // This method would define the generation of the report's header section.
    abstract protected function generateBody();   // This method would be responsible for generating the main body of the report.
    abstract protected function generateFooter(); // This method would handle the generation of the report's footer section.
    
}
