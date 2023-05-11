# Task 03

Implement a remote control for electronic devices

In this task, you will implement a remote control for electronic devices using the Command pattern. The remote control will have multiple buttons, each associated with a specific electronic device command. When a button is pressed, the corresponding command will be executed, allowing the user to control the electronic devices remotely.

## Steps
1- Define the Command interface:

* Define an interface that declares a method, such as execute(), which will be implemented by concrete command classes.

2- Implement concrete Command classes:

* Implement concrete command classes that encapsulate the operations to be performed on the electronic devices. 
* For example, you may have a PowerOnCommand, PowerOffCommand, VolumeUpCommand, and VolumeDownCommand.

3- Create the remote control:

* Create a remote control object that will have buttons associated with different command objects. 
* The remote control should have methods to set the command for each button.

4- Associate commands with buttons:

* Associate specific command objects with the buttons on the remote control. 
* For example, you may associate the PowerOnCommand with the "Power On" button and the VolumeUpCommand with the "Volume Up" button.

5- Execute commands:

* When a button on the remote control is pressed, the corresponding command object should be executed, invoking the execute() method. 
* This will perform the desired operation on the associated electronic device.
