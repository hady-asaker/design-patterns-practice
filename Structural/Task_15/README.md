# Task 15

Implement a Booking System using the Facade Pattern

Suppose you need to implement a Booking System that allows users to book flights, hotels, and car rentals. You can use the Facade Pattern to create a simple interface for booking all these services.


## Steps

1- Identify the complex subsystem: 

* In this case, the complex subsystem is the BookingSystem class, which handles all the interactions with different booking services (e.g., airline reservation system, hotel booking system, car rental service).

2- Implement the Facade: 

* Create a BookingFacade class that provides a simple interface for booking flights, hotels, and car rentals. 
* This class should have methods like bookFlight(), bookHotel(), and bookCarRental(), which internally call the corresponding methods of the BookingSystem class.

3- Test the Facade: 

Create some test cases where you need to book flights, hotels, and car rentals. Use the BookingFacade class to book the services, and verify that the services are booked correctly.
