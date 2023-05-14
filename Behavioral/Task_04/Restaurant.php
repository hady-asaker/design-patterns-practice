<?php

namespace Behavioral\Command\Task4;
require_once "CommandInterface.php";

class Restaurant
{   
    private $menu = 
    [
        "Chicken Marsala", "GRILLED MOROCCAN CHICKEN",
        "TANDOORI CHICKEN", "CHICKEN CURRY", "White Chicken Chili",
        "Alambre", "Bistek", "Sha Phaley", "Steak", "Suadero"
    ];

    public function CheckOrder($order)
    {
        if (in_array($order, $this->menu)) 
        {
            echo "Your Order Preparing" . "<br>";
            return true;
        }
        else {return false;}
    }
    public function getMenu()
    {
        return $this->menu;
    }
    public function GeneratingTheReceipt()
    {
        echo "Generating The Receipt";
    }
    public function UpdatingTheInventory()
    {
        echo "Updating The Inventory";
    }
    public function NotifyingTheKitchenStaff()
    {
        echo "Notifying The Kitchen Staff";
    }
}
