# Task 01

Identify the Client and Adaptee:

- Implement an adapter to use a USB-C device with a laptop that only has USB-A ports.
The adapter should be able to switch between USB-C and USB-A ports.
- This task involves identifying the objects involved in the Adapter pattern. The Client object is the object that needs to use the Adaptee's interface, but cannot use it directly. The Adaptee object is the object that has the interface that needs to be adapted.


## Steps

1- Identify the Client and Adaptee: The Client is the laptop with USB-A ports, and the Adaptee is the USB-C device.

2- Create the Adapter Interface: Define an interface that the Client can use to communicate with the USB-C device, such as a USB-C to USB-A adapter.

3- Implement the Adapter Class: Create a class that implements the Adapter interface and has a reference to the USB-C device. The class should translate calls made by the Client into calls that the USB-C device can understand.

4- Implement the Adaptee Class: The Adaptee class is the USB-C device, which has its own interface.

5- Test the Adapter: Connect the USB-C device to the laptop using the Adapter, and test that the device can be used as intended.
