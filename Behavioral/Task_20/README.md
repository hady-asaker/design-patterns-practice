# Task 20

Implement a payment processing system with different payment methods using the Strategy pattern.

In this task, you will implement a payment processing system using the Strategy pattern. The system will support different payment methods, such as credit card, PayPal, and bank transfer, and allow users to choose their preferred payment method.


## Steps

1- Define the PaymentStrategy interface:

* Create a PaymentStrategy interface that declares methods for processing payments, such as pay().
* This interface will define the contract for all payment strategies.

2- Implement concrete PaymentStrategy classes:

* Implement concrete classes that represent different payment methods.
* For example, you can create a CreditCardPaymentStrategy for credit card payments, a PayPalPaymentStrategy for PayPal payments, and a BankTransferPaymentStrategy for bank transfer payments.
* Each class should implement the PaymentStrategy interface and provide its own payment processing logic.

3- Create the PaymentProcessor class:

* Create a PaymentProcessor class that encapsulates the payment processing logic.
* This class will have a reference to the current payment strategy and provide a method for executing the payment strategy.

4- Set the payment strategy:

* Provide a method in the PaymentProcessor class to set the payment strategy.
* This method will allow the client code to choose the desired payment method dynamically.

5- Process the payment:

* Implement a method in the PaymentProcessor class to process the payment.
* This method will call the pay() method of the currently set payment strategy.
* It will perform the payment processing logic based on the chosen payment strategy.
