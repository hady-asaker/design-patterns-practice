<?php

namespace Structural\DataMapper\Task9;
require_once "DataMapper.php";
use Structural\DataMapper\Task9\DataMapper;

class User
{
    public $Do;

    public function __construct(DataMapper $DM)
    {
        $this->Do = $DM;
    }
    
}
$DM = new DataMapper();
$Test = new User($DM);

// $Test->Do->AddUser("heeh", "123", "hh@hh", "Male");
// $Test->Do->AddUser("ahmed", "123", "kkk@kkk", "male");

// $Test->Do->UpdateUser("aaa", "bbb", "321", "bb@bb", "mmmmm");
// $Test->Do->UpdateUser("aaa", "bbb", "321", "bb@bb", "mmmmm");

// $Test->Do->DeleteUser("ahmed");
// $Test->Do->DeleteUser("ahmed");

$Test->Do->GetUser("ahmed");
$Test->Do->GetUser("ahmaed");