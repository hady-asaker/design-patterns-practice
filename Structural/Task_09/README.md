# Task 09

Implement a Data Mapper

Let's say you have a User class that represents a user in your system. You also have a database that stores user information. To avoid tight coupling between the database and the User class, you can use the Data Mapper pattern.


## Steps

1- Define the Data Mapper interface:

* The Data Mapper interface should define methods for retrieving, storing, and deleting user data from the database.
* The interface should be generic enough to work with any entity, not just the User class.

2- Implement the Data Mapper interface:

* Create a concrete class that implements the Data Mapper interface for the User entity.
* The implementation should handle the mapping between the User class and the database.

3- Implement the User class:

* Create a User class that contains the user data fields and business logic.
* The User class should use the Data Mapper to load and save data to the database.
