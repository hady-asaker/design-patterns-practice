# Task 11

Memento for Text Editor

In this task, you will implement the Memento pattern for a text editor application. The Memento pattern will allow the user to save and restore different states of the text editor, enabling undo and redo functionality.

## Steps

1-Create a TextEditor class: 

* Implement a TextEditor class that represents the text editor application. 
* This class should have methods for modifying the text, saving the current state, and restoring a previous state.

2-Implement the Memento class: 

* Create a Memento class that serves as a snapshot of the state of the text editor. 
* It should store the text content and any other necessary information to restore the state.

3-Create a Caretaker class: 

* Implement a Caretaker class that acts as a caretaker for the mementos. 
* It should have methods for saving a memento, retrieving a memento, and managing multiple mementos for undo and redo functionality.

4-Integrate the Memento with the TextEditor class: 

* Modify the TextEditor class to store and manage mementos. 
* Implement methods to save the current state as a memento, retrieve a memento to restore a previous state, and update the text content accordingly.

5-Test the text editor: 

* Create an instance of the TextEditor class and perform various text editing operations. 
* Save multiple mementos at different points and test the ability to undo and redo changes by restoring previous states using the mementos.
