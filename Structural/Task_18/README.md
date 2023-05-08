# Task 18

Implement a Fluent SQL Query Builder that allows building SQL queries in a fluent way.

The task involves building a Fluent SQL Query Builder that can build SQL queries in a readable and easy-to-use way. The builder should support building SELECT, INSERT, UPDATE, and DELETE queries with various options. To achieve this, we need to define a QueryBuilder interface and implement concrete QueryBuilder classes for each type of query, with methods for setting query options and a build() method that returns the final SQL query.


## Steps

1- Define the QueryBuilder interface: 

* The first step in building a Fluent SQL Query Builder is to define an interface that declares the methods for building different types of SQL queries. 
* This interface should include methods for SELECT, INSERT, UPDATE, and DELETE queries.

2- Implement concrete QueryBuilder classes: 

* Once the QueryBuilder interface is defined, the next step is to implement concrete classes for each type of query. For example, SelectQueryBuilder, InsertQueryBuilder, UpdateQueryBuilder, and DeleteQueryBuilder.

3- Implement methods for each query type: 

* Each QueryBuilder class should have methods that allow developers to set various query options, such as SELECT columns, FROM table, WHERE conditions, etc. 
* These methods should return the QueryBuilder instance, so that they can be chained together in a fluent manner.

4- Implement build() method: 

* Finally, each QueryBuilder class should have a build() method that returns a string representing the final SQL query. 
* This method should use the query options set by the developer to construct the query string.
