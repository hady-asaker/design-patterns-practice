<?php

namespace Structural\Composite\Task8;
require_once "EmployeeInterface.php";
use Structural\Composite\Task8\EmployeeInterface;

class RegularEmployee implements EmployeeInterface
{
    public $Name;
    private $Salary;

    public function __construct($Name, $Salary)
    {
        $this->Name = $Name;
        $this->Salary = $Salary;
    }
    public function getName()
    {
        return $this->Name;
    }
    public function getSalary()
    {
        return $this->Salary;
    }

}
