<?php

namespace Test;
require_once "./Behavioral/Task_21/ReportGenerator.php";

use Behavioral\TemplateMethod\Task21\EmployeeReportTemplate;
use Behavioral\TemplateMethod\Task21\FinancialReportTemplate;
use Behavioral\TemplateMethod\Task21\ReportGenerator;
use Behavioral\TemplateMethod\Task21\SalesReportTemplate;
use PHPUnit\Framework\TestCase;

class Task_21_Test extends TestCase
{
    public function testEmployeeReport()
    {
        $reportGenerator = new ReportGenerator();
        $employeeReportTemplate = new EmployeeReportTemplate();

        $reportGenerator->setReportTemplate($employeeReportTemplate);
        $report = $reportGenerator->generateReport();

        $this->assertEquals([
            "Header"=>"Employee Report Header",
            "Body"=>"Employee Report Body",
            "Footer"=>"Employee Report Footer"], $report);
    }

    public function testFinancialReport()
    {
        $reportGenerator = new ReportGenerator();
        $financialReportTemplate = new FinancialReportTemplate();


        $reportGenerator->setReportTemplate($financialReportTemplate);
        $report = $reportGenerator->generateReport();

        $this->assertEquals([
            "Header"=>"Financial Report Header",
            "Body"=>"Financial Report Body",
            "Footer"=>"Financial Report Footer"], $report);
    }
    
    public function testSalesReport()
    {
        $reportGenerator = new ReportGenerator();
        $salesReportTemplate = new SalesReportTemplate();


        $reportGenerator->setReportTemplate($salesReportTemplate);
        $report = $reportGenerator->generateReport();

        $this->assertEquals([
            "Header"=>"Sales Report Header",
            "Body"=>"Sales Report Body",
            "Footer"=>"Sales Report Footer"], $report);
    }
}
