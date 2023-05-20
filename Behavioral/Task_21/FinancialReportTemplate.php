<?php

namespace Behavioral\TemplateMethod\Task21;
require_once "ReportTemplate.php";

class FinancialReportTemplate extends ReportTemplate
{
    protected function generateHeader()
    {
        return "Financial Report Header";
    }
    
    protected function generateBody()
    {
        return "Financial Report Body";
    }

    protected function generateFooter()
    {
        return "Financial Report Footer";
    }

}
