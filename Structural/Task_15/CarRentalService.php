<?php

namespace Structural\Facade\Task15;

class CarRentalService
{
    private array $AvailableCars = ["BMW-X3", "Mercedes-e200", "Toyota-corolla", "Audi-r8"];
    
    public function rentCar(string $carType, int $days, int $pricePerDay)
    {
        $index = array_search($carType, $this->AvailableCars);

        if ($index !== false)
        {
            $totalCost = $days * $pricePerDay;
            unset($this->AvailableCars[$index]);
            return "Renting a $carType for $days days, costing $pricePerDay per day 
            Total Cost = $totalCost";
        }
        else {
            return "This Car Not Available";
        }
    }
}
