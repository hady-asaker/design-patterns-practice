<?php

namespace Test;
require_once "Structural/Task_06/ComponentInterface.php";
require_once "Structural/Task_06/Folder.php";
require_once "Structural/Task_06/File.php";

use PHPUnit\Framework\TestCase;
use Structural\Composite\Task6\File;
use Structural\Composite\Task6\Folder;

class Task_06_Test extends TestCase
{
    public function testAdding()
    {
        $parentFolder = new Folder("New Folder", 20, "2023-05-07");

        $childFile = new File("123.txt", 10, "2023-05-07");
        $childFolder = new Folder("childFolder", 10, "2023-05-07");

        $parentFolder->addChild($childFile);
        $parentFolder->addChild($childFolder);

        $myFiles = $parentFolder->returnAll();
        
        $this->assertInstanceOf(File::class, $parentFolder->getChild("123.txt"));
        $this->assertContains($childFile, $myFiles);
        $this->assertContains($childFolder, $myFiles);
        $this->assertCount(2, $myFiles);
    }
    public function testRemoving()
    {
        $parentFolder = new Folder("Folder", 20, "2023-05-07");

        $childFile1   = new File("First.txt", 10, "2023-05-07");
        $childFile2   = new File("Second.txt", 10, "2023-05-07");
        $childFolder1 = new Folder("ChildFolder", 10, "2023-05-07");

        $parentFolder->addChild($childFile1);
        $parentFolder->addChild($childFile2);
        $parentFolder->addChild($childFolder1);

        $parentFolder->removeChild("ChildFolder");

        $myFiles = $parentFolder->returnAll();
        
        $this->assertNotContains($childFolder1, $myFiles);
        $this->assertCount(2, $myFiles);
    }

}
