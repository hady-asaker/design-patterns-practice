<?php

namespace Structural\Composite\Task6;
require_once "ComponentInterface.php";

class File implements ComponentInterface
{
    private $Type = "File";
    private $Name;
    private $Size;
    private $CreationDate;

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

}
