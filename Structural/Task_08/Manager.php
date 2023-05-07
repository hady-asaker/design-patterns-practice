<?php

namespace Structural\Composite\Task8;
require_once "EmployeeInterface.php";
require_once "RegularEmployee.php";
use Structural\Composite\Task8\EmployeeInterface;

class Manager implements EmployeeInterface
{
    public $Name;
    private $Salary;

    private array $Employees = [];

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

    public function addChild(EmployeeInterface $Employee)
    {
        $this->Employees[] = $Employee;
    }

    public function removeChild($EmployeeName)
    {
        $found = false;
        foreach ($this->Employees as $key => $employee) 
        {
            if ($employee->getName() === $EmployeeName) {
                unset($this->Employees[$key]);
                $found = true;
                break;
            }
        }
        if (!$found){echo "Employee not found";}
    }
    
    public function getChild($EmployeeName)
    {
        $found = false;
        foreach ($this->Employees as $key => $employee) 
        {
            if ($employee->getName() == $EmployeeName) 
            {
                return($this->Employees[$key]);
                $found = true;
            }
        }
        if (!$found){echo "Employee not found";}
    }

    public function returnAll()
    {
        return $this->Employees;
    }
    
}

$manager = new Manager("asd", 10000);

$a1 = new RegularEmployee("asd1", 2500);
$a2 = new RegularEmployee("asd2", 1500);

$manager->addChild($a1);
$manager->addChild($a2);

$manager->removeChild("asd2");

echo "<pre>"; print_r($manager); echo "</pre>";
