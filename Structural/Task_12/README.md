# Task 12

Implement a Pizza Ordering System using the Decorator Pattern

Suppose you need to implement a Pizza Ordering System where customers can select a base pizza and add extra toppings. Each topping has a different price and can be added to any type of pizza. You can use the Decorator Pattern to add extra toppings to the base pizza.


## Steps

1- Identify the Component: 

* In this case, the Component is the Pizza interface, which should define the method to get the pizza's description and cost.

2- Implement the Concrete Component: 

* The Concrete Component represents the base pizza. In this case, you can create a PlainPizza class that implements the Pizza interface.

3- Implement the Decorator: 

* The Decorator represents the extra toppings. In this case, you can create a ToppingDecorator class that implements the Pizza interface and has a reference to another Pizza object. 
* This class should implement the getDescription() method to append the description of the topping to the pizza's description, and the getCost() method to add the cost of the topping to the pizza's cost.

4- Test the Decorator: 

* Create a PlainPizza object, then create several ToppingDecorator objects (e.g., Pepperoni, Mushroom, Cheese) and wrap them around the PlainPizza object. 
* Print the description and cost of the resulting object to see the final pizza.

