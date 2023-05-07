<?php

namespace Structural\Composite\Task6;
require_once "ComponentInterface.php";
require_once "File.php";

class Folder implements ComponentInterface
{
    private $Type = "Folder";
    private $Name;
    private $Size;
    private $CreationDate;

    private array $Components = [];

    public function __construct($Name, $Size, $CreationDate) 
    {
        $this->Name = $Name;
        $this->Size = $Size;
        $this->CreationDate = $CreationDate;
    }

    public function getName() :string
    {   
        return $this->Name;
    }

    public function getSize() :int
    {
        return $this->Size;
    }

    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    public function addChild(ComponentInterface $Child)
    {
        $this->Components[] = $Child;
        $this->Size += $Child->getSize();
    }

    public function removeChild($name)
    {
        foreach ($this->Components as $key => $value) {
            $found = false;
            if ($value->getName() === $name) {
                unset($this->Components[$key]);
                $this->Size -= $value->getSize();
                echo "Component Deleted Successfully" . "<br>";
                $found = true;
                break;
            }
        }
        if(!$found) {
            echo "This Component Not Found" . "<br>";
        }
    }

    public function getChild($name)
    {
        foreach ($this->Components as $key => $value) {
            $found = false;
            if ($value->getName() === $name) {
                return($this->Components[$key]);
                $found = true;
                break;
            }
        }
        if(!$found) {
            echo "This Component Not Found" . "<br>";
        }

    }

}

$ParentFolder = new Folder("BOSS", 0, "15-15-15");

$childFolder1 = new Folder("FolderChild1", 20, "12-12-12");
$childFolder2 = new Folder("FolderChild2", 20, "11-11-11");
$childFolder3 = new Folder("FolderChild3", 20, "10-10-10");

$ParentFolder->addChild($childFolder1); // Empty Folder
$ParentFolder->addChild($childFolder2); // Empty Folder

$File1 = new File("File1", 20, "18-18-18");
$File2 = new File("File2", 20, "17-17-17");
$File3 = new File("File3", 20, "16-16-16");

$childFolder3->addChild($File1);
$childFolder3->addChild($File2);

$ParentFolder->addChild($childFolder3); // Folder Has Two Files [ File1, File2 ]
$ParentFolder->addChild($File3);

// echo $ParentFolder->getSize();       // 120
// echo "<pre>"; print_r($ParentFolder); echo "</pre>";

// $ParentFolder->removeChild("File3");
// echo $ParentFolder->getSize();       // 100
// echo "<pre>"; print_r($ParentFolder); echo "</pre>";

// $ParentFolder->getChild("FolderChild3")->removeChild("File1");
// echo "<pre>"; print_r($ParentFolder->getChild("FolderChild3")); echo "</pre>";


echo "<pre>"; print_r($ParentFolder); echo "</pre>";