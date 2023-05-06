# Task 02

Let's say you have a legacy codebase that includes a class LegacyDatabase with a method get_data(). This method returns data in a format that is no longer useful for your modern application. You want to use the get_data() method to populate a new class ModernDatabase that has a different data format. To do this, you can use the Adapter pattern.


## Steps

1- Identify the Client and Adaptee:

* The Client object is your new ModernDatabase class that needs to use the get_data() method from the Adaptee.
* The Adaptee object is the legacy LegacyDatabase class that has the get_data() method that you want to use.

2- Create the Adapter Interface:

* The Adapter interface is the interface that the Client object can use. In this case, you can create a new interface DatabaseAdapter with a method fetch_data() that matches the format of the data you need in your ModernDatabase class.

3- Implement the Adapter Class:

* The Adapter class is the class that implements the Adapter interface. In this case, you can create a new class LegacyDatabaseAdapter that implements the DatabaseAdapter interface.
* This class should have a reference to the LegacyDatabase object and should delegate calls to the get_data() method. The LegacyDatabaseAdapter class translates the calls made by the Client object (via fetch_data()) into calls that the LegacyDatabase object can understand.

4- Implement the Adaptee Class:

* The Adaptee class is the LegacyDatabase class that has the interface that needs to be adapted. This class should be independent of the Adapter class and should not know about the existence of the Adapter class.
* The LegacyDatabase class provides the functionality that the LegacyDatabaseAdapter class needs to implement the DatabaseAdapter interface.
