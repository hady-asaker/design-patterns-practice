# Task 01

Implement a ticketing system with a logging chain of responsibility.

In this task, you will implement a ticketing system with a logging chain of responsibility. The system will handle various types of tickets from users, such as technical issues, billing inquiries, and feature requests. Each ticket will be processed by a chain of loggers that will handle and log relevant information based on the ticket's category.


## Steps

1-Define the Ticket class:

* Create a Ticket class with the following properties:
* * category: string - Represents the category of the ticket (e.g., "Technical", "Billing", "Feature").
* * description: string - Represents the description or details of the ticket.

2-Define the Logger interface:

* Create a Logger interface with the following method:
* * handleTicket(Ticket $ticket): void - This method will handle the ticket and log relevant information based on its category.

3-Implement concrete Logger classes:

* Implement concrete logger classes that handle tickets of specific categories:
* * TechnicalLogger - Handles tickets with the "Technical" category and logs relevant information to a technical log file.
* * BillingLogger - Handles tickets with the "Billing" category and logs relevant information to a billing log file.
* * FeatureLogger - Handles tickets with the "Feature" category and logs relevant information to a feature log file.
* * Each logger class should implement the Logger interface and provide its own implementation for the handleTicket() method.

4-Create the logging chain:

* Create instances of each logger class: technicalLogger, billingLogger, and featureLogger.
* Set up the logging chain by linking the loggers together in the following order: 
* * TechnicalLogger -> BillingLogger -> FeatureLogger.
* * Set the next logger for technicalLogger as billingLogger.
* * Set the next logger for billingLogger as featureLogger.

5-Pass the tickets through the logging chain:

* When a ticket is received, start the ticket handling process by calling the handleTicket() method on technicalLogger.
* Each logger in the chain should check if it can handle the ticket based on its category.
* If a logger can handle the ticket, it should log the relevant information and stop the propagation.
* If a logger cannot handle the ticket, it should pass the ticket to the next logger in the chain by invoking the handleTicket() method on the next logger.
