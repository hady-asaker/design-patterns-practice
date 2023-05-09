<?php

namespace Structural\Facade\Task15;

class HotelBookingSystem
{
    private $AvailableRooms = 1;

    public function bookRoom($name, int $days)
    {
        if ($this->AvailableRooms > 0) 
        {
            $this->AvailableRooms--;
            return "Booking Room for $name for $days days";
        }
        else {
            return "No Available Rooms";
        }
    }
}
