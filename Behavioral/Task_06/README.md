# Task 06

Iterator for a Shopping Cart

In this task, you will implement an iterator for a shopping cart. The iterator will allow iterating over the items in the cart, providing functionality to access and manipulate the items.

## Steps

1-Define the Item class: 

* Create a class called Item that represents a single item in the shopping cart. 
* It should have properties such as the item name, price, and quantity.

2-Create a ShoppingCart class: 

* Implement a ShoppingCart class that represents a collection of items. 
* This class should have methods to add items to the cart, remove items from the cart, and retrieve the iterator for the cart.

3-Implement the Iterator interface: 

* Define an interface called Iterator that declares methods for iterating over the items in the shopping cart, such as hasNext() to check if there are more items and next() to retrieve the next item.

4-Implement a concrete Iterator class: 

* Create a class that implements the Iterator interface and provides the logic for iterating over the items in the shopping cart. 
* This class should maintain the necessary state to keep track of the current position in the cart and retrieve the next item.

5-Integrate the Iterator with the ShoppingCart class: 

* Modify the ShoppingCart class to implement the Iterator interface and provide the necessary logic to create and return an instance of the concrete Iterator class.

6-Test the iterator: 

* Use the iterator to iterate over the items in the shopping cart and perform operations such as calculating the total price, updating the quantity of items, and checking if there are more items.
