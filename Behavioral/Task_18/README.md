# Task 18

Implement an online order processing system with different order states.

In this task, you will implement an online order processing system using the State pattern. The order processing system will have different states representing the current state of an order and its behavior.


## Steps

1- Define the State interface:

* Create a State interface that declares methods for the actions that can be performed on an order, such as placeOrder(), cancelOrder(), shipOrder(), completeOrder(), etc.

2- Implement concrete State classes:

* Implement concrete classes that represent different states of an order. 
* For example, you can create a PendingState for when the order is pending, a CancelledState for when the order is cancelled, a ShippedState for when the order is shipped, and a CompletedState for when the order is completed.

3- Create the Order class:

* Create an Order class that encapsulates the state of an order and provides methods for performing actions such as placing the order, cancelling the order, shipping the order, and completing the order.

4- Set the initial state:

* Initialize the Order with an initial state, such as the PendingState.

5- Handle state transitions:

* Implement methods in the Order class to handle state transitions based on the actions performed. 
* For example, when an order is placed, transition to the PendingState, and when an order is cancelled, transition to the CancelledState.
