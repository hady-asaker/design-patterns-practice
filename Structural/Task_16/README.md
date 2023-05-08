# Task 16

Implement a Notification System using the Facade Pattern

Suppose you need to implement a Notification System that allows users to send messages via different channels (e.g., email, SMS, push notifications). You can use the Facade Pattern to create a simple interface for sending messages.


## Steps

1- Identify the complex subsystem: 

* In this case, the complex subsystem is the NotificationService class, which handles all the interactions with different messaging channels.

2- Implement the Facade: 

* Create a NotificationFacade class that provides a simple interface for sending messages via different channels. 
* This class should have methods like sendEmail(), sendSMS(), and sendPushNotification(), which internally call the corresponding methods of the NotificationService class.

3- Test the Facade: 

* Create a new Order object and pass it to the OrderFacade to be processed. Verify that the payment is processed correctly, the inventory is updated, and the shipping is scheduled. 
* Then, check the Order status to ensure that it has been successfully processed and shipped.
