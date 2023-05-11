# Task 12

Memento for Document Editing

In this task, you will implement the Memento pattern for a document editing application. The Memento pattern will allow the user to save and restore different versions of a document, enabling version control and history tracking.


## Steps

1-Create a Document class: 

* Implement a Document class that represents a document in the editing application. 
* This class should have methods for modifying the content of the document and saving its current state.

2-Implement the Memento class: 

* Create a Memento class that serves as a snapshot of the document state. 
* It should store the content and any other necessary information to restore the state.

3-Create a History class: 

* Implement a History class that acts as a caretaker for the document mementos. 
* It should have methods for saving a memento, retrieving a memento, and managing multiple mementos for version control and history tracking.

4-Integrate the Memento with the Document class: 

* Modify the Document class to store and manage mementos. 
* Implement methods to save the current state as a memento, retrieve a memento to restore a previous version, and update the document content accordingly.

5-Test the document editing: 

* Create an instance of the Document class and perform various editing operations. Save multiple mementos at different points to create a version history. 
* Test the ability to restore previous versions using the mementos and track the changes made to the document.
