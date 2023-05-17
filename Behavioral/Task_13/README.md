# Task 13

Stock Market

In this task, you will implement the Observer pattern for a stock market monitoring application. The application will have multiple observers that track the stock prices of different companies and display them in real-time.


## Steps

1-Define the Subject interface: 

* Create a Subject interface that declares methods for registering, removing, and notifying observers.

2-Implement the StockMarket class: 

* Create a StockMarket class that implements the Subject interface. This class will keep track of the stock prices and notify the observers whenever there is a change in the prices.

3-Define the Observer interface: 

* Create an Observer interface that declares a method for updating the observer with the latest stock prices.

4-Implement the StockPriceDisplay classes:

* Create concrete classes that implement the Observer interface. 
* Each class will represent a different stock price display, such as AppleStockPriceDisplay, GoogleStockPriceDisplay, and AmazonStockPriceDisplay. 
 These classes will be responsible for displaying the stock prices they are interested in.

5-Register observers: 

* In the StockMarket class, provide methods for observers to register and unregister themselves.

6-Notify observers: 

* Whenever there is a change in the stock prices, notify all registered observers by invoking their update methods. 
* The observers will then fetch the latest stock prices from the StockMarket and update their displays accordingly.
