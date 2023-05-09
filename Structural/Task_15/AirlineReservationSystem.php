<?php

namespace Structural\Facade\Task15;

class AirlineReservationSystem
{
    public $AvailableFlights = 
    [
        "USA" => [
            "FlightNumber1" => ["Class1" => 20, "Class2" => 50], 
            "FlightNumber2" => ["Class1" => 1, "Class2" => 20]
        ],
        "Spain" => [
            "FlightNumber1" => ["Class1" => 33, "Class2" => 25]
        ],
        "Italy" => [
            "FlightNumber1" => ["Class1" => 5, "Class2" => 30]
        ],
        "KSA" => [
            "FlightNumber1" => ["Class1" => 8, "Class2" => 22]
        ],
        "Qatar" => [
            "FlightNumber1" => ["Class1" => 10, "Class2" => 26]
        ]
    ];

    public function bookFlight(string $flightNumber, string $departure, string $arrival, string $class, string $name)
    {
        if (isset($this->AvailableFlights[$arrival])) {
            $flight = $this->AvailableFlights[$arrival];
            if (isset($flight[$flightNumber])) {
                $classSeats = $flight[$flightNumber];
                if (isset($classSeats[$class])) {
                    $seats = $classSeats[$class];
                    if ($seats > 0) {
                        $this->AvailableFlights[$arrival][$flightNumber][$class] = $seats - 1;
                        return "Booked flight [ $flightNumber ] from [ $departure ] to [ $arrival ] for [ $class ] class with name $name";
                    } else {
                        return "No more seats available in class [ $class ] for flight [ $flightNumber ] to [ $arrival ]";
                    }
                } else {
                    return "Class [ $class ] not found for flight $flightNumber to $arrival";
                }
            } else {
                return "No flight with number [ $flightNumber ] available to [ $arrival ]";
            }
        } else {
            return "No flights available to [ $arrival ]";
        }
    }
}
