# Task 03

Let's say you have a Shape class hierarchy with different shapes like Circle, Square, and Triangle. You also have a Color class hierarchy with different colors like Red, Green, and Blue. You want to be able to create different combinations of shapes and colors without creating a separate class for each combination. To do this, you can use the Bridge pattern.


## Steps

1- Identify the Abstraction and Implementor:

* The Abstraction is the Shape class hierarchy. This is the high-level class that represents the shape and defines its behavior.
* The Implementor is the Color class hierarchy. This is the low-level class that defines the color and how it is applied to the shape.

2- Create the Abstraction Interface:

* The Abstraction interface is the interface that the client code will use to interact with the Abstraction. In this case, you can create a new interface ShapeInterface with methods like draw() and setColor(Color $color) that represent the shape and its color.

3- Implement the Abstraction:

* The Abstraction implementation is the class that implements the Abstraction interface. In this case, you can create a new class Shape that implements the ShapeInterface. 
* This class should have a reference to the Implementor and should delegate the setColor() method to it.
* The Shape class represents the shape and its behavior, and the Implementor represents the color and how it is applied to the shape.

4- Implement the Implementor:

* The Implementor implementation is the class that implements the Implementor interface. In this case, you can create a new class Color that implements the ColorInterface.
* This class should have a method applyColor(ShapeInterface $shape) that takes a Shape object and applies the color to it. The Color class represents the color and how it is applied to the shape.

5- Test the Bridge.
