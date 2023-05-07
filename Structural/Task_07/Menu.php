<?php

namespace Structural\Composite\Task7;
require_once "ComponentInterface.php";
require_once "MenuItem.php";

class Menu implements ComponentInterface
{
    private $itemName;
    private $Url;

    private array $Components = [];

    public function __construct($itemName, $Url)
    {
        $this->itemName = $itemName;
        $this->Url = $Url;
    }

    public function getName()
    {
        return $this->itemName;
    }
    public function getUrl()
    {
        return $this->Url;
    }
    public function addChild(ComponentInterface $child)
    {
        $this->Components[] = $child;
    }
    public function removeChild($childName)
    {
        $found = false;
        foreach ($this->Components as $key => $value) {
            if ($value->getName() == $childName) {
                unset($this->Components[$key]);
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "Component Not Found";
        }
    }
    public function getChild($childName)
    {
        $found = false;
        foreach ($this->Components as $key => $value) {
            if ($value->getName() == $childName) {
                return($this->Components[$key]);
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "Component Not Found";
        }
    }
    public function returnAll()
    {
        return $this->Components;
    }
}

$Menu = new Menu("Parent", "https://parentMenu.com");

$MenuChild1 = new Menu("Child 1", "https://child1.com");
$MenuChild2 = new Menu("Child 2", "https://child2.com");
$MenuChild3 = new Menu("Child 3", "https://child3.com");

$MenuItem1  = new MenuItem("MenuItem 1", "https://MenuItem1.com");
$MenuItem2  = new MenuItem("MenuItem 2", "https://MenuItem2.com");
$MenuItem3  = new MenuItem("MenuItem 3", "https://MenuItem3.com");
$MenuItem4  = new MenuItem("MenuItem 4", "https://MenuItem4.com");

$MenuChild1->addChild($MenuItem1);
$MenuChild1->addChild($MenuItem2);
$MenuChild2->addChild($MenuItem3);

$Menu->addChild($MenuChild1);
$Menu->addChild($MenuChild2);
$Menu->addChild($MenuChild3);
$Menu->addChild($MenuItem4);

// echo "<pre>"; print_r($Menu); echo "</pre>";

$MenuChild1->removeChild("MenuItem 1");
$Menu->removeChild("Child 3");

// echo "<pre>"; print_r($Menu); echo "</pre>";

echo "<pre>"; print_r($Menu->getChild("Child 2")); echo "</pre>";
echo "<pre>"; print_r($Menu->getChild("Child 3")); echo "</pre>";