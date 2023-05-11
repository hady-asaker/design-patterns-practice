# Task 02

Implement an email notification chain of responsibility

In this task, you will implement an email notification chain of responsibility. The chain will consist of multiple email handlers, each responsible for sending email notifications to different recipients based on specific criteria. The email notification will be passed through the chain until it is handled by an appropriate email handler.


## Steps

1- Define the EmailHandler interface:

* Define an interface that declares the method for handling email notifications, such as handleEmail(). 
* This interface will be implemented by the concrete email handlers.

2- Implement concrete EmailHandler classes:

Implement concrete email handler classes that handle email notifications based on specific criteria, such as HighPriorityHandler, InternalRecipientHandler, and ExternalRecipientHandler.
* Each email handler should have a reference to the next email handler in the chain.

3- Create the email notification chain:

Create an instance of each email handler class and set up the chain by linking them together in the desired order. 
* For example, the HighPriorityHandler may be followed by the InternalRecipientHandler, which is then followed by the ExternalRecipientHandler.

4- Pass the email notifications through the chain:

* When an email notification is received, pass it through the chain starting from the first email handler. 
* Each email handler should check if it can handle the email notification based on the specified criteria. If it can handle the notification, it should do so. Otherwise, it should pass the notification to the next email handler in the chain.
