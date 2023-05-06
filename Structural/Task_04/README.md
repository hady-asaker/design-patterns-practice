# Task 04

Let's say you're working on a music player application that supports different audio file formats like MP3, FLAC, and WAV. You want to be able to support different output devices like headphones, speakers, and soundbars without creating separate classes for each combination of audio format and output device. To do this, you can use the Bridge pattern.


## Steps

1- Identify the Abstraction and Implementor:

* The Abstraction is the Audio class hierarchy. This is the high-level class that represents the audio file and defines its behavior. 
* The Implementor is the OutputDevice class hierarchy. This is the low-level class that defines the output device and how it plays the audio file.

2- Create the Abstraction Interface:

* The Abstraction interface is the interface that the client code will use to interact with the Abstraction. In this case, you can create a new interface AudioInterface with methods like play() and setOutput(OutputDevice $device) that represent the audio file and its output device.

3- Implement the Abstraction:

* The Abstraction implementation is the class that implements the Abstraction interface. In this case, you can create a new class Audio that implements the AudioInterface. 
* This class should have a reference to the Implementor and should delegate the setOutput() method to it. 
* The Audio class represents the audio file and its behavior, and the Implementor represents the output device and how it plays the audio file.

4- Implement the Implementor:

* The Implementor implementation is the class that implements the Implementor interface. In this case, you can create a new class OutputDevice that implements the OutputDeviceInterface.
* This class should have a method play(AudioInterface $audio) that takes an Audio object and plays it on the device. The OutputDevice class represents the output device and how it plays the audio file.

5- Test the Bridge.
