# Task 09

Mediator for Air Traffic Control System

In this task, you will implement a mediator for an air traffic control system. The mediator will facilitate communication between multiple aircraft, allowing them to coordinate their movements and avoid collisions.

## Steps

1-Define the Aircraft class: 

* Create a class called Aircraft that represents an aircraft in the air traffic control system. 
* The Aircraft class should have properties such as a unique identifier, current position, and methods to update its position and receive instructions.

2-Create an AirTrafficControl class: 

* Implement an AirTrafficControl class that acts as the mediator for the air traffic control system. 
* The AirTrafficControl class should have methods to register aircraft, handle position updates, and issue instructions.

3-Implement the Mediator interface: 

* Define an interface called Mediator that declares methods for registering aircraft, handling position updates, and issuing instructions.

4-Implement a concrete Mediator class: 

* Create a class that implements the Mediator interface and provides the logic for mediating communication between aircraft. 
* This class should maintain a list of registered aircraft, handle position updates, and issue collision avoidance instructions.

5-Integrate the Mediator with the Aircraft class: 

* Modify the Aircraft class to store a reference to the mediator and use it to update its position and receive instructions.

6-Test the air traffic control system: 

* Create multiple instances of the Aircraft class and register them with the AirTrafficControl mediator. 
* Simulate aircraft movements by updating their positions and verify that the mediator correctly handles collisions and issues instructions to avoid them.
