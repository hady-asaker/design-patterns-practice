# Task 11

Implement a Logger using the Dependency Injection Pattern

Suppose you need to implement a Logger that can log messages to different sources, such as files, databases, or external services. You want to use the Dependency Injection Pattern to make the Logger easily configurable and testable.


## Steps

1- Identify the Logger interface:

* In this case, you can define a Logger interface that should define the methods that all loggers should implement, like log() and setLogLevel().

2- Implement the Logger classes:

* Implement different Logger classes that implement the Logger interface. 
* For example, you can create a FileLogger class that logs messages to a file, a DatabaseLogger class that logs messages to a database, and a ExternalServiceLogger class that logs messages to an external service.

3- Identify the Logger user:

* Identify the classes that will use the Logger and define a constructor that accepts a Logger object as a parameter. 
* For example, you can create a DatabaseManager class that needs to log some messages and has a constructor that accepts a Logger object.

4- Implement the Dependency Injection:

* Instantiate the Logger object and inject it into the classes that need it. For example, you can create a FileLogger object and inject it into a FileManager object. 
* You can also use a Dependency Injection Container to manage the objects and their dependencies.

5- Test the Logger: 
* Write some code that logs messages using the Logger object, and verify that the messages are being logged to the expected sources. 
* You can also write some unit tests to test the Logger classes and their dependencies.
