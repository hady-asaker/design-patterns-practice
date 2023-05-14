# Task 04

Implement a restaurant ordering system using the Command pattern

In this task, you will implement a restaurant ordering system that uses the Command pattern to handle customer orders. The system will allow customers to place orders for various food items, and these orders will be encapsulated as commands.


## Steps

1- Define the Command interface:

* Define an interface that declares a method such as execute(). This method will be implemented by concrete command classes.

2- Implement concrete Command classes:

* Implement concrete command classes that encapsulate the customer orders. Each command should have its own execute() method that defines the specific behavior of processing the order.

3- Create the OrderHandler:

* Create an OrderHandler object that will handle customer orders and manage the execution of commands.
* The OrderHandler should have a method to set the current command and execute it.

4- Associate commands with customer actions:

* Associate specific command objects with customer actions such as placing an order for a food item.
* For example, you may associate an OrderCommand with the action of placing an order for a specific food item.

5- Execute commands:

* When a customer places an order, create the corresponding command object and set it as the current command in the OrderHandler.
* The command will carry out the necessary actions to process the order, such as notifying the kitchen staff, updating the inventory, and generating a receipt.

6- Process customer orders:

* When the current command is set, execute it by calling the execute() method in the OrderHandler.
* The OrderHandler will invoke the execute() method of the appropriate command, which will process the customer order.
