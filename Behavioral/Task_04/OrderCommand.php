<?php

namespace Behavioral\Command\Task4;
require_once "CommandInterface.php";
require_once "Restaurant.php";

class OrderCommand implements CommandInterface
{
    private Restaurant $Restaurant;

    public function __construct(Restaurant $Restaurant)
    {
        $this->Restaurant = $Restaurant;
    }
    public function execute()
    {
        $this->Restaurant->GeneratingTheReceipt();
        echo "<br>";
        $this->Restaurant->UpdatingTheInventory();
        echo "<br>";
        $this->Restaurant->NotifyingTheKitchenStaff();
    }
}
