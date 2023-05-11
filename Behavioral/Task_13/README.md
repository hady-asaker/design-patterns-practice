# Task 13

Weather Station

In this task, you will implement the Observer pattern for a weather station application. The weather station will have multiple observers that display different aspects of the weather, such as temperature, humidity, and pressure.


## Steps

1-Define the Subject interface: 

* Create a Subject interface that declares methods for registering, removing, and notifying observers.

2-Implement the WeatherStation class: 

* Create a WeatherStation class that implements the Subject interface. 
* This class will keep track of the weather data and notify the observers whenever there is a change in the weather.

3-Define the Observer interface: 

* Create an Observer interface that declares a method for updating the observer with the latest weather data.

4-Implement the WeatherDisplay classes: 

* Create concrete classes that implement the Observer interface. 
* Each class will represent a different weather display, such as TemperatureDisplay, HumidityDisplay, and PressureDisplay. 
* These classes will be responsible for displaying the weather data they are interested in.

5-Register observers: 

* In the WeatherStation class, provide methods for observers to register and unregister themselves.

6-Notify observers: 

* Whenever there is a change in the weather data, notify all registered observers by invoking their update methods. 
* The observers will then fetch the latest weather data from the WeatherStation and update their displays accordingly.
