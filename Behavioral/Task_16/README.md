# Task 16

Implement a user authentication system using the Specification pattern.

Description:
You are developing a web application that requires user authentication. The authentication system has complex rules for determining whether a user is authenticated based on various factors such as email verification, account status, and role. Your task is to implement the Specification pattern to encapsulate the authentication rules and determine if a user is authenticated based on these specifications.


## Steps

1- Implement a User class with properties such as email, isVerified, isActive, and role.

2- Define a Specification interface with a method isSatisfiedBy(User $user) that returns a boolean indicating if the given user satisfies the specification.

3- Implement concrete specification classes, such as EmailVerificationSpecification, AccountStatusSpecification, and RoleSpecification, that implement the Specification interface and define specific rules for user authentication based on email verification, account status, and role.

4- Create an AuthenticationService class that takes a user and applies the specifications to determine if the user is authenticated. 
* The AuthenticationService class should have a method isUserAuthenticated(User $user) that returns a boolean indicating if the user is authenticated based on the specifications.

5- Demonstrate the usage of the Specification pattern by creating instances of the User class, defining specifications, and using the AuthenticationService class to authenticate users based on the specifications.
