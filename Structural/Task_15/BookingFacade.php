<?php

namespace Structural\Facade\Task15;
require_once "AirlineReservationSystem.php";
require_once "HotelBookingSystem.php";
require_once "CarRentalService.php";

class BookingFacade
{
    private $CarService;
    private $Airline;
    private $Hotel;

    public function __construct() 
    {
        $this->CarService = new CarRentalService;
        $this->Airline = new AirlineReservationSystem;
        $this->Hotel = new HotelBookingSystem;
    }

    public function bookFlight($flightNumber, $departure, $arrival, $class, $name)
    {
        return $this->Airline->bookFlight($flightNumber, $departure, $arrival, $class, $name);
    }

    public function bookHotel($name, $days)
    {
        return $this->Hotel->bookRoom($name, $days);
    }

    public function bookCarRental(string $carType, int $days, int $pricePerDay)
    {
        return $this->CarService->rentCar($carType, $days, $pricePerDay);
    }
}

$s = new BookingFacade();
echo $s->bookCarRental("BMW-X3", 5, 1500);
echo "<br>";
echo $s->bookCarRental("BMW-X3", 5, 1500);
echo "<br>";
echo $s->bookFlight("FlightNumber2", "Egypt", "USA", "Class1", "Hady"); // Only One Flight Available
echo "<br>";
echo $s->bookFlight("FlightNumber2", "Egypt", "USA", "Class1", "Hady");
echo "<br>";
echo $s->bookHotel("Hady", 3);  // One Room Only is available
echo "<br>";
echo $s->bookHotel("aaa", 1);  // One Room Only is available
