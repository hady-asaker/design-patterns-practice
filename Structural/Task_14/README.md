# Task 14

Implement a user authentication system using the Decorator Pattern

Suppose you need to implement a user authentication system that can authenticate users using different methods, like username/password, Facebook login, or Google login. You can use the Decorator Pattern to add new authentication methods at runtime without modifying the existing code.


## Steps

1- Identify the Component: 

* In this case, the Component is the Authenticator interface, which should define the methods that all Authenticators share, like authenticate().

2- Implement the Concrete Component:

* The Concrete Component represents the basic Authenticator that authenticates users using username/password. 
* In this case, you can create a UsernamePasswordAuthenticator class that implements the Authenticator interface and authenticates users using username/password.

3- Implement the Decorator: 

* The Decorator adds new authentication methods to the basic Authenticator. In this case, you can create a FacebookAuthenticator class that extends the AuthenticatorDecorator class and authenticates users using Facebook login. 
* You can also create a GoogleAuthenticator class that extends the AuthenticatorDecorator class and authenticates users using Google login.

4- Test the Decorator: 

* Create a UsernamePasswordAuthenticator instance, wrap it in a FacebookAuthenticator instance, wrap the FacebookAuthenticator in a GoogleAuthenticator instance, and then authenticate some users using different methods. 
* You should be able to authenticate users with their username and password using the UsernamePasswordAuthenticator, as well as with their Facebook or Google accounts using the respective decorators. 
* The decorators should add the necessary authentication steps to the authentication process, without modifying the original class.
