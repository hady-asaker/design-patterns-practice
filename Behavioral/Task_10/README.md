# Task 10

Mediator for Online Marketplace

In this task, you will implement a mediator for an online marketplace. The mediator will facilitate communication between buyers and sellers, allowing them to interact and negotiate prices for products.

## Steps

1-Define the Buyer and Seller classes: 

* Create classes called Buyer and Seller that represent the buyers and sellers in the online marketplace. 
* The Buyer class should have properties such as a unique identifier, desired product, and methods to make offers and receive counteroffers. 
* The Seller class should have properties such as a unique identifier, listed product, and methods to receive offers and negotiate prices.

2-Create a Marketplace class: 

* Implement a Marketplace class that acts as the mediator for the online marketplace. 
* The Marketplace class should have methods to register buyers and sellers, handle offer and counteroffer exchanges, and facilitate price negotiations.

3-Implement the Mediator interface: 

* Define an interface called Mediator that declares methods for registering buyers and sellers, handling offer and counteroffer exchanges, and facilitating price negotiations.

4-Implement a concrete Mediator class: 

* Create a class that implements the Mediator interface and provides the logic for mediating communication between buyers and sellers. 
* This class should maintain a list of registered buyers and sellers, handle offer and counteroffer exchanges, and facilitate price negotiations.

5-Integrate the Mediator with the Buyer and Seller classes: 

* Modify the Buyer and Seller classes to store a reference to the mediator and use it to make offers, receive counteroffers, receive offers, and negotiate prices.

6-Test the online marketplace: 

* Create multiple instances of the Buyer and Seller classes and register them with the Marketplace mediator. 
* Simulate offer and counteroffer exchanges between buyers and sellers and verify that the mediator correctly facilitates price negotiations and communications.
