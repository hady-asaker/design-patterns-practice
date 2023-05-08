# Task 17

Implement a Car Configuration System using the Fluent Builder Pattern

This task involves implementing a car configuration system where customers can select various options to build a custom car. The Fluent Builder Pattern can be used to simplify the construction of complex objects like cars.

## Steps

1- Define the Car class with properties for make, model, engine, transmission, color, and other features.

2- Create a CarBuilder class that will be used to build the car object. The class should have methods for setting the make, model, engine, transmission, color, and other features.

3- Each of the methods in the CarBuilder class should return the builder object itself to allow for chaining.

4- Add a build() method to the CarBuilder class that creates and returns a new Car object using the values set by the builder methods.

5- Use the builder to create and customize Car objects by chaining together the builder methods.

6- Call the build() method to retrieve the completed Car object.
