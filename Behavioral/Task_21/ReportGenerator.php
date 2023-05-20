<?php

namespace Behavioral\TemplateMethod\Task21;
require_once "EmployeeReportTemplate.php";
require_once "FinancialReportTemplate.php";
require_once "SalesReportTemplate.php";

class ReportGenerator
{
    private ReportTemplate $reportTemplate;

    public function setReportTemplate(ReportTemplate $reportTemplate)
    {
        $this->reportTemplate = $reportTemplate;
    }

    public function generateReport()
    {
        return $this->reportTemplate->generateReport();
    }
}

$reportGenerator = new ReportGenerator();

$employeeReportTemplate = new EmployeeReportTemplate();
$financialReportTemplate = new FinancialReportTemplate();
$salesReportTemplate = new SalesReportTemplate();

$reportGenerator->setReportTemplate($employeeReportTemplate);
$report = $reportGenerator->generateReport();
echo '<pre>'; print_r($report); echo'</pre>';

$reportGenerator->setReportTemplate($financialReportTemplate);
$report = $reportGenerator->generateReport();
echo '<pre>'; print_r($report); echo'</pre>';

$reportGenerator->setReportTemplate($salesReportTemplate);
$report = $reportGenerator->generateReport();
echo '<pre>'; print_r($report); echo'</pre>';
