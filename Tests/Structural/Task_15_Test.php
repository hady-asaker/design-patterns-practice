<?php

namespace Test;
require_once "./Structural/Task_15/BookingFacade.php";

use PHPUnit\Framework\TestCase;
use Structural\Facade\Task15\AirlineReservationSystem;
use Structural\Facade\Task15\BookingFacade;
use Structural\Facade\Task15\CarRentalService;
use Structural\Facade\Task15\HotelBookingSystem;

class Task_15_Test extends TestCase
{   

    public function testCanRentCar()
    {
        $test = new BookingFacade;
        $my = $test->bookCarRental("BMW-X3", 5, 1500);
        $this->assertEquals("Renting a BMW-X3 for 5 days, costing 1500 per day Total Cost = 7500", $my);
    }

    public function testCanBookRoom()
    {
        $test = new BookingFacade;
        $my = $test->bookHotel("Hady", 3);
        $this->assertEquals("Booking Room for Hady for 3 days", $my);
    }

    public function testCanBookFlight()
    {
        $test = new BookingFacade;
        $my = $test->bookFlight("FlightNumber2", "Egypt", "USA", "Class1", "a7a");
        $this->assertEquals("Booked flight [ FlightNumber2 ] from [ Egypt ] to [ USA ] for [ Class1 ] class with name a7a", $my);
    }
}
