# Task 14

Social Media Followers

In this task, you will implement the Observer pattern for a social media application. The application will have users who can follow other users, and the followers will be notified whenever the users they follow make a new post.


## Steps

1-Define the Subject interface: 

* Create a Subject interface that declares methods for registering, removing, and notifying observers.

2-Implement the User class: 

* Create a User class that represents a user in the social media application. 
* This class will keep track of the user's followers and notify them whenever a new post is made.
* Define the Observer interface: Create an Observer interface that declares a method for updating the observer with the latest post.

3-Implement the Follower classes: 

* Create concrete classes that implement the Observer interface. 
* Each class will represent a follower of a user and will be responsible for displaying the new posts made by the user they follow.

4-Register observers: 

* In the User class, provide methods for followers to register and unregister themselves.

5-Post updates: 

* In the User class, implement a method for creating and posting updates. 
Whenever a new post is made, notify all registered followers by invoking their update methods. 
* The followers will then receive the latest post from the user they follow and display it in their interface.
