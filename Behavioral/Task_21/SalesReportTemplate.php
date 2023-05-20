<?php

namespace Behavioral\TemplateMethod\Task21;
require_once "ReportTemplate.php";

class SalesReportTemplate extends ReportTemplate
{
    protected function generateHeader()
    {
        return "Sales Report Header";
    }
    
    protected function generateBody()
    {
        return "Sales Report Body";
    }

    protected function generateFooter()
    {
        return "Sales Report Footer";
    }
    
}
