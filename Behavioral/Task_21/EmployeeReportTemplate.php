<?php

namespace Behavioral\TemplateMethod\Task21;
require_once "ReportTemplate.php";

class EmployeeReportTemplate extends ReportTemplate
{
    protected function generateHeader()
    {
        return "Employee Report Header";
    }
    
    protected function generateBody()
    {
        return "Employee Report Body";
    }

    protected function generateFooter()
    {
        return "Employee Report Footer";
    }

}
