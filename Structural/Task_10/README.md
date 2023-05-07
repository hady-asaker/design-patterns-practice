# Task 10

Implement a Data Mapper

Let's say you have a Product class that represents a product in your system. You also have a database that stores product information. To avoid tight coupling between the database and the Product class, you can use the Data Mapper pattern.


## Steps

1- Define the Data Mapper interface:

* The Data Mapper interface should define methods for retrieving, storing, and deleting product data from the database.
* The interface should be generic enough to work with any entity, not just the Product class.


2- Implement the Data Mapper interface:

* Create a concrete class that implements the Data Mapper interface for the Product entity.
* The implementation should handle the mapping between the Product class and the database.

3- Implement the Product class:

* Create a Product class that contains the product data fields and business logic.
* The Product class should use the Data Mapper to load and save data to the database.
