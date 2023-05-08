<?php

namespace Structural\DataMapper\Task9;

interface DataMapperInterface
{
    public function AddUser($Name, $Password, $Email, $Gender);
    public function UpdateUser($Name, $UPDName, $UPDPassword, $UPDEmail, $UPDGender);
    public function DeleteUser($Name);
    public function GetUser($Name);
}
