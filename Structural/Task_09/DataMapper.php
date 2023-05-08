<?php

namespace Structural\DataMapper\Task9;
require_once "DataMapperInterface.php";
require_once "DBConnection.php";
use Structural\DataMapper\Task9\DataMapperInterface;

class DataMapper implements DataMapperInterface
{
    private $con;

    public function __construct() 
    {
        $this->con = new DBConnection();
        $this->con = $this->con->connect();
    }

    public function AddUser($Name, $Password, $Email, $Gender)
    {
        $searchForEmail = $this->con->prepare("SELECT * FROM users WHERE email = :Email");
        $searchForEmail->bindParam("Email", $Email);
        $searchForEmail->execute();

        if($searchForEmail->rowCount()>0)
        {
            echo "This Email [ " . $Email . " ] Is Used";
        }
        else {
            $AddUser = $this->con->prepare("INSERT INTO 
            users(name, password, email, gender) 
            VALUES(:Name, :Password, :Email, :Gender)");
    
            $AddUser->bindParam("Name", $Name);
            $AddUser->bindParam("Password", $Password);
            $AddUser->bindParam("Email", $Email);
            $AddUser->bindParam("Gender", $Gender);
    
            if ($AddUser->execute()) {
                echo "User Added Successfully";
            }
            else {
                echo "Error";
            }    
        }
    }
    
    public function UpdateUser($Name, $UPDName, $UPDPassword, $UpdEmail, $UpdGender)
    {
        $searchForUser = $this->con->prepare("SELECT * FROM users WHERE name = :Name");
        $searchForUser->bindParam("Name", $Name);
        $searchForUser->execute();

        if($searchForUser->rowCount()>0)
        {
            $UpdateUser = $this->con->prepare("UPDATE users SET 
            name = :UPDName, password = :UPDPassword, email = :UpdEmail, gender = :UpdGender WHERE name = :Name");
    
            $UpdateUser->bindParam("Name", $Name);
            $UpdateUser->bindParam("UPDName", $UPDName);
            $UpdateUser->bindParam("UPDPassword", $UPDPassword);
            $UpdateUser->bindParam("UpdEmail", $UpdEmail);
            $UpdateUser->bindParam("UpdGender", $UpdGender);
    
            if ($UpdateUser->execute()) {
                echo "User Updated Successfully";
            }
            else {
                echo "Error";
            }    
        }
        else {
            echo "This User [ " . $Name . " ] Not Found";
        }
    }

    public function DeleteUser($Name)
    {
        $searchForUser = $this->con->prepare("SELECT * FROM users WHERE name = :Name");
        $searchForUser->bindParam("Name", $Name);
        $searchForUser->execute();

        if($searchForUser->rowCount()>0)
        {
            $DeleteUser = $this->con->prepare("DELETE FROM users WHERE name = :Name");
            $DeleteUser->bindParam("Name", $Name);
    
            if ($DeleteUser->execute()) {
                echo "User Deleted Successfully";
            }
            else {
                echo "Error";
            }
        }
        else {
            echo "This User [ " . $Name . " ] Not Found";
        }
    }

    public function GetUser($Name)
    {
        $GetUser = $this->con->prepare("SELECT * FROM users WHERE name = :Name");
        $GetUser->bindParam("Name", $Name);
        $GetUser->execute();

        $user = $GetUser->fetchObject();

        if($GetUser->rowCount()>0)
        {
            echo "User Found" . "<br>";
            echo "Name: "        . $user->name . "<br>";
            echo "Password: " . $user->password . "<br>";
            echo "Email: "    . $user->email . "<br>";
            echo "Gender: "   . $user->gender . "<br>";
        }
        else {
            echo "This User [ " . $Name . " ] Not Found";
        }
    }

}

