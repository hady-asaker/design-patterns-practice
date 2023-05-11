# Task 08

Mediator for Chat Application

In this task, you will implement a mediator for a chat application. The mediator will facilitate communication between multiple users in a chat room, allowing them to send messages to each other without having direct references to each other.

## Steps

1-Define the User class: 

* Create a class called User that represents a user in the chat application. 
* The User class should have properties such as a unique identifier and methods to send and receive messages.

2-Create a ChatRoom class: 

* Implement a ChatRoom class that acts as the mediator for the chat application. 
* The ChatRoom class should have methods to register users, send messages between users, and handle user requests.

3-Implement the Mediator interface: 

* Define an interface called Mediator that declares methods for registering users, sending messages, and handling user requests.

4-Implement a concrete Mediator class: 

* Create a class that implements the Mediator interface and provides the logic for mediating communication between users. 
* This class should maintain a list of registered users and handle message routing between users.

5-Integrate the Mediator with the User class: 

* Modify the User class to store a reference to the mediator and use it to send and receive messages.

6-Test the chat application: 

* Create multiple instances of the User class and register them with the ChatRoom mediator. 
* Use the mediator to send messages between users and verify that the messages are properly routed and received.
