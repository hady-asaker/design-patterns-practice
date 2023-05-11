# Task 01

Implement a logging chain of responsibility

In this task, you will implement a logging chain of responsibility. The chain will consist of multiple loggers, each responsible for handling log messages of a specific severity level. The loggers will be organized in a hierarchical manner, where a log message will be passed through the chain until it is handled by an appropriate logger based on its severity level.


## Steps

1- Define the Logger interface:

* Define an interface that declares the method for handling log messages, such as handleLog(). This interface will be implemented by the concrete loggers.


2- Implement concrete Logger classes:

* Implement concrete logger classes that handle log messages of specific severity levels, such as InfoLogger, WarningLogger, and ErrorLogger. 
* Each logger should have a reference to the next logger in the chain.

3- Create the logging chain:

* Create an instance of each logger class and set up the chain by linking them together in the desired order. 
* For example, the InfoLogger may be followed by the WarningLogger, which is then followed by the ErrorLogger.

4- Pass the log messages through the chain:

* When a log message is received, pass it through the chain starting from the first logger. Each logger should check if it can handle the log message based on its severity level.
* If it can handle the message, it should do so. Otherwise, it should pass the message to the next logger in the chain.
